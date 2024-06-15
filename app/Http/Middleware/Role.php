<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            Auth::user()->role == 'Admin' || 
            Auth::user()->role == 'HR' || 
            Auth::user()->role == 'Konselling' || 
            Auth::user()->role == 'PsikotestFree' || 
            Auth::user()->role == 'BerbinarPlus') {
            return $next($request);
        } else {
        }
        return redirect()->route('dashboard.login');
    }
}
