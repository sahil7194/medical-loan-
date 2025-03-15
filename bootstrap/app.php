<?php

use App\Http\Middleware\ReferentMiddleware;
use App\Http\Middleware\SchemeMiddleware;
use App\Http\Middleware\StaffMiddleware;
use App\Http\Middleware\VendorMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias(
            [
                'referent' => ReferentMiddleware::class,
                'vendor'   => VendorMiddleware::class,
                'staff'    => StaffMiddleware::class,
                'scheme'   => SchemeMiddleware::class,
            ]
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            return response()->view('error.not-found', status: 404);
        });

        $exceptions->render(function (RouteNotFoundException $e, Request $request) {

            if (preg_match('/login/', $e->getMessage())) {

                return response()->redirectTo('signin');
            }

            return response()->view('error.not-found', status: 404);
        });
    })->create();
