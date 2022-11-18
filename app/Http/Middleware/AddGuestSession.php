<?php

namespace App\Http\Middleware;

use Closure;
use Faker\Core\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AddGuestSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Requestz): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user() && !session('guest')){
            session()->put('guest', Str::uuid());
        }

        return $next($request);
    }
}
