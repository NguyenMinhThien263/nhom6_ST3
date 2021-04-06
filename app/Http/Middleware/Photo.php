<?php

namespace App\Http\Middleware;

use Closure;

class Photo
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
       if($request->fname != "")
       {
            return next($request);
       }
       return redirect('/index');
    }
}
