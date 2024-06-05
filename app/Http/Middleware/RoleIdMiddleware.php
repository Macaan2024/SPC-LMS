<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class RoleIdMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roleIds): Response
    {
        $user = Auth::user();
        $userRoleId = $user->role_id; // Assuming role_id is the correct field name
        
        if ($request->ajax()) {
            return $next($request);
        }
        
        if (in_array($userRoleId, $roleIds)) {
            return $next($request);
        }
        
        return redirect('/');
    }
}
