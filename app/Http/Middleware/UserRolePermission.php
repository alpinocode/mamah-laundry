<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRolePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( $request->user()->hasRole("CUSTOMER")) {
            return $next($request);
        } else {
            return redirect()->route('admin.createorders')->with('Error', 'Anda Tidak dapat mengakses halaman ini');

        }
    }
}
