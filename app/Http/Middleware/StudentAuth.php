<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StudentAuth
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('id')) {
            return redirect('studentlogin');
        }

        return $next($request);
    }
}
