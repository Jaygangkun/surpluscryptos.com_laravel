<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use App\Models\GeneralSetting;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use Spatie\Permission\Models\Role;
use Twilio\Rest\Client;


class RegisterController extends Controller
{
    const VIEW = 'backend.auth';

    public function index()
    {
        return view(self::VIEW . '.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $data = $request->only(
            'name',
            'email',
            'phone',
        );

        $data['email_verified_at'] = now();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        $user->assignRole(3);
        auth()->login($user);
        return redirect()->route('dashboard')->with(['message' => 'Welcome']);

//        return response()->json([
//            'message' => 'Welcome',
//            'redirect_url' => route('dashboard'),
//        ]);

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
