<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ReferentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::find(Auth::user()->id);

        if (!$user->isReferent()) {

            return response()->json([
                "message" => "you don't have access to this page"
            ]);

            // return response()->view('error.not-found', status: 404);
        }
        return $next($request);
    }
}
