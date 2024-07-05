<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAdminUser
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

        // Vérifie si l'utilisateur a l'email spécifique
        if ($user->email === 'ndeyecisse188@gmail.com') {
            return redirect()->route('association.index');
        }

        return $next($request);
    }
}