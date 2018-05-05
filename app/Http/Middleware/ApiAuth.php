<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuth
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
        if($request->has('token'))
        {


            $token = $request->input('token');

            if($token == env('API_TOKEN'))
            {
                return $next($request);

            }
        }
        else
        {
            return response('Unauthorized Access',401);

        }

        return response('Unauthorized Access',401);
        
    }
}
