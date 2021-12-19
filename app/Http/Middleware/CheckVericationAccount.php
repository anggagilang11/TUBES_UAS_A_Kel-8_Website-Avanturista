<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckVericationAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()){
            if(auth()->user()->email_verified_at == null){
                auth()->logout();
                return redirect()->route('login')->with('failed', 'Akun anda belum diverifikasi');
            }
        }

        return $next($request);
    }
}
