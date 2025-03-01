<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function handelRegister(Request $request)
    {

        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password']),
        ]);

        Auth::login($user);

        return redirect('/');
        // dd($request->all());
    }

    public function login()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {

        $credential = $request->validate([
            'email' => 'required|string|exists:users,email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credential)) {
            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
            'password' => 'These credentials do not match our records.',
        ])->withInput($request->except('password'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('Auth.login');
    }
}
