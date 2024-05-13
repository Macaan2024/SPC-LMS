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
    public function handle(Request $request, Closure $next, $roleId): Response
    {
        $user = Auth::user();
        $userRoleId = $user->role_id; // Assuming role_id is the correct field name
    
        if ($userRoleId == $roleId) {
            return $next($request);
        }
        return redirect('index');
    }
}
