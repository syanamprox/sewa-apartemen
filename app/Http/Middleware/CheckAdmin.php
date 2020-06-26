<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
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
        
        if($user->level === 1){
            return $next($request);
        }
        elseif($user->level === 2)
        {
            return redirect()->route('agendsb');
        }
        elseif($user->level === 3)
        {
            return redirect()->route('penghunidsb');
        }
    }
}
