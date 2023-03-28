<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function login() {
		return view("auth.login");
	}
    public function dologin(Request $request)
	{
		$email = $request->email;
		$pass = $request->password;
		if(Auth::attempt(['email'=>$email, 'password'=> $pass]))
		{   
			$user = User::where('email', $email)->first();
			session(['user'=> $user]); //set session variable
			return redirect('/');
		}
		return redirect('/formlogin')->with('error_message', 'Unknown email or password!');
	}

	public function logout(Request $request) {
		Auth::logout();
		return redirect('/login');
	}
}
