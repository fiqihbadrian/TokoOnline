<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null;
        }

        // Cek jika request URI menuju area backend
        if ($request->is('backend*')) {
            return route('backend.login');
        }

        // Cek jika request URI menuju area frontend (dapat diaktifkan nanti)
        if ($request->is('frontend*')) {
            return route('frontend.login');
        }

        // Redirect default jika tidak ada rute yang cocok
        return route('backend.login');
    }
}