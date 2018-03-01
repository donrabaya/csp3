<?php

namespace App\Http\Middleware;

use Closure;

class CheckType
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
        if ($request->user() === null){
            return response('insufficient permissions', 401);
        }
        $actions = $request->route()->getAction();
        $types = isset($actions['types']) ? $actions['types'] : null;

        if(request->user()->hasAnyTypes($types) || !types) {
            return $next($request);           
        }
        return response('insufficient permissions', 401);
    }
}
