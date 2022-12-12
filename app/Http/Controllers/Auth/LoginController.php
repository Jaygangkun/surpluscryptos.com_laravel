<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    const VIEW = 'backend.auth';

    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }

        return view(self::VIEW . '.login');
    }

    public function forgotPassword()
    {
        return view(self::VIEW . '.forgot-password');
    }

    public function postForgotPassword(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if ($user) {
            $str_random = Str::random(60);
            $user->reset_token = $str_random;
            $user->save();
            $html = '<p>Please click on below link for reset password.</p>';
            $html .= '<br>';
            $html .= '<a target="_blank" href="' . url('reset-password/' . $str_random . '/' . $user->id) . '">Reset Password</a>';
            Mail::send('emails.raw', ['html' => $html], function ($message) use ($request, $email) {
                $message->to($email)
                    ->subject('Reset Password');
            });
        }
        return back()->with(['message' => 'please check your mail box']);
    }

    public function resetPassword($code, $id)
    {
        $user = User::where('reset_token', $code)
            ->where('id', $id)->first();
        if (!$user) {
            abort(404);
        }
        return view(self::VIEW . '.reset-password', [

        ]);
    }

    public function postResetPassword(Request $request)
    {

        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::where('reset_token', $request->token)
            ->where('id', $request->public_id)
            ->first();

        if (!$user) {
            abort(404);
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login')->with(['message' => 'Password reset successfully']);
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = $request->only('email', 'password');
        
       // dd($data);

        if (auth()->attempt($data, true)) {
//            auth()->user()->update([
//                'last_login' => now(),
//                'last_login_ip' => $request->ip(),
//            ]);
//            saveActivity([
//                'title' => 'User Logged In',
//                'type' => 'auth',
//                'ip' => $request->ip(),
//            ]);

            return redirect()->route('dashboard')->with([
//                'message' => "Hello " . auth()->user()->name . ", welcome to your Sales Tools"
            ]);
        }

        $message = 'incorrect credentials';
        if ($request->ajax()) {
            abort(422, $message);
        }

        return back()
            ->withInput()
            ->with(['message' => $message]);
    }

    public function logout()
    {
//        saveActivity([
//            'title' => 'User Logged Out',
//            'type' => 'auth',
//            'ip' => request()->ip(),
//        ]);
        auth()->logout();
        return redirect()->route('login');
    }

}
