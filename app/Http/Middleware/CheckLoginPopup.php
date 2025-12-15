<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLoginPopup
{
public function handle($request, Closure $next)
{
    if (!Auth::check()) {
        // tandai bahwa popup harus muncul
        $request->session()->flash('show_login_popup', true);
    }

    return $next($request);
}

}
