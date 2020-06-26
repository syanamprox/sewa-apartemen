<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAgen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        
        if($user->level === 2 or $user->level === 1){
            return $next($request);
        }
        elseif($user->level === 3)
        {
            return redirect()->route('penghunidsb');
        }
    }
}
