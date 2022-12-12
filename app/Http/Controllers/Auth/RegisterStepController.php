<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use App\Models\GeneralSetting;
use App\Models\TempUser;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Twilio\Rest\Client;


class RegisterStepController extends Controller
{
    const VIEW = 'backend.auth';

    public function index()
    {

    }

    public function initVerifyEmail($code)
    {
        $code_parts = explode('-', $code);
        $record = TempUser::find($code_parts[0]);
        if ($record && $record->email_verify_code == $code_parts[1]) {
            $record->email_verified = now();
            $record->save();
            session()->flash('success', 'Email has been Verified');
            session()->flash('footer_message', 'Go Back And Finish The Signup Process');
            return view('backend.auth.message')
                ->with([
                    'success' => 'Email has been Verified',
                ]);
        }
        abort(404);
    }

    public function store(Request $request)
    {
        switch ($request->step) {
            case 1:
                $request->validate([
                    'email' => 'required|email|unique:users',
                    'phone' => 'required',
                    'partner_code' => 'required',
                ]);

                $data = $request->only([
                    'email',
                    'phone',
                    'partner_code',
                ]);

                $partner = User::where('partner_number', $request->partner_code)->first();

                if (!$partner) {
                    return abort(422, 'The Partner code is incorrect.');
                }

                $data['email_verify_code'] = Str::random(40);
                $data['phone'] = $request->phone_prefix . $request->phone;
                $record = TempUser::create($data);


                $to_email = $record->email;

                Mail::send('emails.init-email-verification', ['record' => $record], function ($message) use ($to_email) {
                    $message->to($to_email)
                        ->subject('Welcome to Surplus');
                });

                return response()
                    ->json([
                        'record' => $record,
                        'message' => 'Success',
                    ]);

                break;
            case 2:
                $record = TempUser::find($request->record_id);
                if ($record && $record->email_verified) {
                    return response()
                        ->json([
                            'message' => 'Success',
                        ]);
                }
                return abort(422, 'The Email is not verified.');
                break;
            case 3:

                $request->validate([
                    'password' => 'required|confirmed',
                ]);

                $record = TempUser::find($request->record_id);

                if ($record) {

                    $record->password = bcrypt($request->password);
                    $record->phone_verify_code = rand(100000, 999999);
                    $record->save();

                    //send phone verify code here

                    $client = new Client(env('TWILIO_SID'), env('TWILIO_TOKEN'));

                    $client->messages->create(
                    // the number you'd like to send the message to
                        $record->phone,
                        [
                            // A Twilio phone number you purchased at twilio.com/console
                            'from' => env('TWILIO_FROM'),
                            // the body of the text message you'd like to send
                            'body' => "Your verification code for Surplus is {$record->phone_verify_code}. Enter this code to verify your account."
                        ]
                    );

                    return response()
                        ->json([
                            'message' => 'Success',
                        ]);

                }

                return abort(422, 'The User is not exist.');
                break;
            case 4:
                $request->validate([
                    'phone_verify_code' => 'required',
                ]);
                $record = TempUser::find($request->record_id);
                if ($record) {
                    if ($record->phone_verify_code == $request->phone_verify_code) {
                        $record->phone_verified = now();
                        $record->save();
                        return response()
                            ->json([
                                'message' => 'Success',
                            ]);
                    }
                    return abort(422, 'The code is incorrect.');
                }
                return abort(422, 'The User is not exist.');
                break;
            case 5:
                $request->validate([
//                    'name_prefix' => 'required',
                    'first_name' => 'required',
//                    'middle_name' => 'required',
                    'last_name' => 'required',
//                    'name_suffix' => 'required',
                ]);
                $record = TempUser::find($request->record_id);
                if ($record) {
                    $data = $request->only([
                        'name_prefix',
                        'first_name',
                        'middle_name',
                        'last_name',
                        'name_suffix',
                    ]);
                    $record->update($data);
                    return response()
                        ->json([
                            'message' => 'Success',
                        ]);
                }
                return abort(422, 'The User is not exist.');
                break;
            case 6:
                $request->validate([
                    'street' => 'required',
//                    'unit_number' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'zipcode' => 'required',
                ]);
                $record = TempUser::find($request->record_id);
                if ($record) {
                    $data = $request->only([
                        'street',
                        'unit_number',
                        'city',
                        'state',
                        'zipcode',
                    ]);
                    $record->update($data);
                    return response()
                        ->json([
                            'message' => 'Success',
                        ]);
                }
                return abort(422, 'The User is not exist.');
                break;
            case 7:
                $request->validate([
                    'gender' => 'required',
                    'dob' => 'required',
                    'stn' => 'required',
                ]);
                $record = TempUser::find($request->record_id);
                if ($record) {
                    $data = $request->only([
                        'gender',
                        'dob',
                        'stn',
                    ]);

                    $record->update($data);

                    $user = User::create([
                        'email' => $record->email,
                        'password' => $record->password,
                        'phone' => $record->phone,
                        'email_verified_at' => now(),
                        'last_name' => $record->last_name,
                        'name_prefix' => $record->name_prefix,
                        'first_name' => $record->first_name,
                        'name' => $record->first_name,
                        'middle_name' => $record->middle_name,
                        'name_suffix' => $record->name_suffix,
                        'street' => $record->street,
                        'unit_number' => $record->unit_number,
                        'city' => $record->city,
                        'state' => $record->state,
                        'zipcode' => $record->zipcode,
                        'partner_code' => $record->partner_code,
                        'gender' => $record->gender,
                        'dob' => $record->dob,
                        'stn' => $record->stn,
                    ]);

                    $user->assignRole(3);

                    auth()->login($user);
                    return response()
                        ->json([
                            'message' => 'Success',
                        ]);
                }
                return abort(422, 'The User is not exist.');
                break;
        }

        return response()
            ->json([
                'message' => 'Success',
            ]);

    }

    public function verify($code)
    {
        $data = explode('-', $code);
        $user = User::where('id', $data[1])->where('token', $data[0])->first();
        if ($user) {
            $user->email_verified_at = now();
            $user->save();
//            auth()->login($user);
            return redirect()->route('login')
                ->with([
                    'toast' => [
                        'heading' => 'Greeting',
                        'message' => 'Now Your Account is verified.',
                        'type' => 'success',
                    ]
                ]);
        }
        abort(404);
    }

}
