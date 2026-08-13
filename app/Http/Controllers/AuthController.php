<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLogin()
    {
        return view('login.index');
    }


    /**
     * Proses login admin
     */
    public function login(Request $request)
    {
        // Validasi
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'Username wajib diisi.',
                'password.required' => 'Password wajib diisi.',
            ]
        );


        // Data yang digunakan untuk login
        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];


        // Cek username dan password
        if (Auth::attempt($credentials)) {

            // Membuat session baru
            $request->session()->regenerate();

            // Login berhasil
            return redirect()->route('dashboard.index');
        }


        // Login gagal
        return back()
            ->withInput($request->only('username'))
            ->withErrors([
                'login' => 'Username atau password yang kamu masukkan salah.',
            ]);
    }


    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.index');
    }
}