<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admincheck
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
        if(!session()->has('loggeduser')&&($request->path()!='test3' )) {
            return redirect('test3')->with ('fail','You must be logged in');
        }
        if(session()->has('loggeduser')&&($request->path()=='test3' )) {
            return back();
        }
        return $next($request)->header('cache-control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 Jan 1990 00:00:00 GMT');
    }
    }




