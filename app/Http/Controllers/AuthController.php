<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Register akun pengguna biasa (bukan admin) — dipakai di tab Daftar.
     */
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => false,
        ]);

        Auth::login($user);

        return redirect(route('beranda').'#daftar')->with('success', 'Akun berhasil dibuat, kamu langsung masuk.');
    }

    /**
     * Login akun pengguna biasa — dipakai di tab Daftar.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'Email atau password salah.',
            ]);
        }

        $request->session()->regenerate();

        return redirect(route('beranda').'#daftar')->with('success', 'Berhasil masuk ke akun.');
    }

    /**
     * Login khusus admin — form ini cuma bisa dibuka lewat tombol tersembunyi
     * (ketik "admin" di keyboard, lihat public/js/app.js).
     */
    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => 'Email atau password salah.',
            ]);
        }

        if (!Auth::user()->is_admin) {
            Auth::logout();
            throw ValidationException::withMessages([
                'email' => 'Akun ini bukan akun admin.',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('beranda')->with('success', 'Login berhasil, selamat datang admin!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('beranda')->with('success', 'Berhasil keluar.');
    }
}
