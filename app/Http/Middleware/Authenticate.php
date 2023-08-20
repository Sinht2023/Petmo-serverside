<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Route;


use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Redirect to a URL of your choice
            return url('/chat'); // Change '/' to your desired URL
            //return Route::post('/api/chat', '\App\Http\Controllers\ChatController@sendMessage');
        }
    }
}
