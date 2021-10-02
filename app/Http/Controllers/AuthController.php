<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function auth(Request $req)
    {
        $validator = $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $req->only('username', 'password');
        if (Auth::attempt($credentials)) {
            # code...
            return redirect()->intended('/');
        } else {
            return redirect()->route('login')->with('error', 'Periksa kembali username atau password anda !');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
