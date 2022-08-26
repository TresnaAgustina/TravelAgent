<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.Login',[
            'title' => 'Login Admin'
        ]);
    }

     // Login
     public function authenticate(Request $request){

        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        ddd();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed. Please check your username or password')->onlyInput('username');

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }
}
