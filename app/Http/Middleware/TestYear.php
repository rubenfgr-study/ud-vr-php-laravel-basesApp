<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestYear
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $year = $request->route('year');

        if (is_null($year) || $year != 2019) {
            return redirect('/films');
        }

        return $next($request);
    }
}
