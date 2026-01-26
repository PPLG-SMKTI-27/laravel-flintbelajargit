<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLogin()
    {
        return view('login');
    }

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        // Data login yang valid
        $validCredentials = [
            'email' => 'admin@portfolio.dev',
            'password' => 'password123'
        ];

        // Cek kredensial
        if ($request->email === $validCredentials['email'] && 
            $request->password === $validCredentials['password']) {
            
            // Simpan status login di session
            Session::put('is_logged_in', true);
            Session::put('user_email', $request->email);
            
            // Redirect ke halaman utama dengan pesan sukses
            return redirect('/')->with('login_success', 'Login berhasil! Selamat datang kembali.');
        }

        // Jika kredensial salah
        return back()
            ->with('error', 'Email atau password salah!')
            ->withInput($request->only('email'));
    }

    /**
     * Logout sederhana
     */
    public function logout()
    {
        Session::forget('is_logged_in');
        Session::forget('user_email');
        
        return redirect('/login')->with('success', 'Anda telah logout.');
    }
}