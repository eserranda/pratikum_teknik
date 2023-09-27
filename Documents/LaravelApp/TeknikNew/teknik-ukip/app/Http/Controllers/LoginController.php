<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'username  Harus di isi',
            'password.required' => 'Password harus di isi'
        ]);

        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $request->session()->put('role', Auth::user()->role);
            $request->session()->put('nama', Auth::user()->name);
            if (session('role') === 'sipil') {
                return redirect('/sipil/data_mahasiswa');
            } else if (session('role') === 'elektro') {
                return redirect('/elektro/data_mahasiswa');
            }
        } else {
            return redirect('login')->withErrors('Username Atau password tidak sesuai')->withInput();
        }
    }

    function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('login');
    }
}
