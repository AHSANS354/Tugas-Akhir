<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
    $customer = $request->user()->customer;

    if (!$customer || !$customer->alamat) {
        toast('Berhasil Menambahkan Data!', 'error');
        return redirect()->route('profile');
    }

    return $next($request);
}

}
