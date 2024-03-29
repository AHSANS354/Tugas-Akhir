<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // return $next($request);
        if (Auth::check()) {
            $role = explode('-', $role);
            foreach($role as $prn) {
                if (Auth::user()->role == $prn)
                {
                    return $next($request);
                }
            }
        }
        return redirect('/');
    }
}
