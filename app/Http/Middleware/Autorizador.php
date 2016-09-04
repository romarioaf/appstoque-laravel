<?php

namespace estoque\Http\Middleware;

use Closure;

class Autorizador
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
        dd($request);
        if(!$request->is('login/auth') && \Auth::guest()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
