<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
    	if (Auth::attempt($request->only('email', 'password'))) {
    		return redirect('/admin');
    	}

    	return redirect('/login');
        // dd($request->all());
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
