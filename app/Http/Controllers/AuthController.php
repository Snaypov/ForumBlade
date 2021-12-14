<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmAuth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginUser(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(User::where('email',$request->email)->whereNotNull('email_verified_at')->first() &&
            Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            Auth::user();

            return redirect()->route('home');
        }
        return redirect()->route('login')->with(['message' => $validator->errors()]);
    }

    public function registerUser(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'nickname' => 'required|min:3|unique:users',
            'password' => 'required|min:6|max:255',
        ]);

        if($validator->fails()){
            return redirect()->route('register')->with(['message' => $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nickname' => $request->nickname,
            'photo' => $request->photo,
            'password' => Hash::make($request->password),
        ]);

        Mail::to($user->email)->send(new ConfirmAuth($user->email));

        return view('verify-email');
    }

    public function showEmailVerification(){
        return view('email');
    }

    public function reVerifyEmail(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if(User::where('email', $request->email)->whereNull('email_verified_at')->first()){
            Mail::to($request->email)->send(new ConfirmAuth($request->email));
            return view('verify-email');
        }
        return redirect()->route('verification');
    }

    public function confirmEmail($email){
        $user = User::where('email', $email)->first();

        if($user){
            User::where('email', $email)->update(['email_verified_at' => now()]);
            return view('success-verification');
        }
    }
}
