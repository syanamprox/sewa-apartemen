<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if(Auth::user()->level === 1)
            {
                return redirect()->route('admindsb');
            } 
            
            elseif (Auth::user()->level === 2)
            {
                return redirect()->route('agendsb');
            }
    
            elseif (Auth::user()->level === 3)
            {
                return redirect()->route('penghunidsb');
            }
        }

        return $next($request);
    }
}
