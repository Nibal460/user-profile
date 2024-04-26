<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   /* public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }*/
    // app/Http/Middleware/RedirectIfAuthenticated.php

public function handle($request, Closure $next, $guard = null)
{
    if (Auth::guard($guard)->check()) {
        return redirect('/profile'); // Redirect to /profile instead of /home
    }

    return $next($request);
}
}


