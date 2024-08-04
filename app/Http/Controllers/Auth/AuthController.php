<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8'
        ], [
            'email.exists' => "email doesn't exists"
        ]);
        try {

            $user = User::where(['email' => $request->email])->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return redirect()->back()->withErrors([
                    'password' => 'Invalid password.'
                ]);
            }
            Auth::login($user);
            return $user->role == 'admin'? redirect()->route('admin_dashboard') : redirect()->route('user_dashboard');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors([
                'error' => $th
            ]);
        }
    }
    function loginView()
    {
        return view('auth.login');
    }
    function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ], [
            'email.unique' => "email already exists"
        ]);
        try {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            Auth::login($user);
            return redirect()->route('home');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors([
                'error' => $th
            ]);
        }
    }
    function registerView()
    {
        return view('auth.register');
    }

    function logout(Request $request)
    {
        try {
            Auth::logout();
            return redirect()->route('home');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors([
                'error' => $th
            ]);
        }
    }
}
