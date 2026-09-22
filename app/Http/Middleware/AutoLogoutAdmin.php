<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutoLogoutAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Jika user sedang login sebagai admin tapi mengakses
        // route di luar /admin/*, otomatis logout
        if (Auth::check() && !$request->is('admin*') && !$request->is('login')) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return $next($request);
    }
}