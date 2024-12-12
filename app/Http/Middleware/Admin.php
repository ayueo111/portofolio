<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna sudah login dan memiliki peran 'admin'
        if (auth()->user() && auth()->user()->usertype == 'admin') {
            return $next($request);
        }

        // Jika bukan admin, arahkan ke halaman utama
        return redirect('/');
    }
}
