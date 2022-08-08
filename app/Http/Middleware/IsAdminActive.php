<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdminActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::guard('admin')->check()){
            if (Auth::guard('admin')->user()->is_active == 0) {
                session()->flash('no_active' , __('هذا الحساب معطل يرجى التواصل من الدعم الفني') );
                Auth::logout();
                return redirect()->route("admin.login")->withInput();
            }
        }

        return $next($request);
    }
}
