<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $section
     * @return mixed
     */
    public function handle($request, Closure $next, $section)
    {
    
        if (!Auth::check()) {
            return redirect('login');
        }

        $role = Auth::user()->role;
        $acl = config('acl');

        // Проверяем доступ по ACL
        if (!isset($acl[$section][$role]) || !$acl[$section][$role]) {
            abort(403, 'Нет доступа.');
        }

        return $next($request);
    }
}

