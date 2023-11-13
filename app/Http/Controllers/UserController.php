<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $creds = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email address',
            'password.required' => 'Password is required'
        ]);

        if (Auth::attempt($creds)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
                'auth' => 'Invalid Credentials',
            ])->withInput($request->only('email'));

        // return dd($creds);
    }

    public function register()
    {
        return view('user.register');
    }

    public function registerUser(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email address',
            'email.unique' => 'Email already exists',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters'
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt( $request->input('password') )
        ];
        try {
            User::create($data);
            return redirect()->intended('/');
        } catch (\Exception $e) {
            return back()->withErrors([
                'regist' => 'Cannot register user',
            ])->withInput($request->only('name', 'email'));
        }
    }

    public function logout(Request $request): RedirectResponse
    {   
        Auth::logout();
        return redirect('/');
    }
}