<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * Cuma user yang login DAN is_admin = true yang boleh lewat.
     * Kalau bukan admin, di-logout paksa & dilempar balik ke halaman utama
     * dengan pesan error — biar gak ada yang bisa "tebak-tebakan" akses /admin.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user() || !$request->user()->is_admin) {
            if ($request->user()) {
                auth()->logout();
            }
            return redirect()->route('beranda')->with('error', 'Akses ditolak. Akun ini bukan admin.');
        }

        return $next($request);
    }
}
