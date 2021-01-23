<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthGate
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
        $user = Auth::user();
        if($user) {
            $permissions = Permission::all();
            foreach($permissions as $key => $permission ){
                Gate::define($permission->slug, function(User $user) use($permission){
                    return $user->hasPermission($permission->slug);
                })
            }
        }
    }
}
