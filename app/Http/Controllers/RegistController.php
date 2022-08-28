<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegistController extends Controller
{
    public function index()
    {
        return view('auth.AdminRegist', [
            'title' => 'Register Admin'
        ]);
    }

    public function store(Request $request)
    {
        //store data to db user
        $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required']
        ]);

        $admin = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($admin));

        Auth::login($admin);

        return redirect()->intended('/login');
    }

}

