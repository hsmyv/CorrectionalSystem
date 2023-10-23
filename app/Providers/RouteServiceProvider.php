<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';
    /**
     * The controller namespace for the application.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware(['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
                ->group(function () {
                    LaravelLocalization::setLocale();
                    Route::as('admin.')
                        ->namespace($this->namespace . '\\Admin')
                        ->group(base_path('routes/admin.php'));
                });


            Route::middleware('api')
                ->prefix('user')
                ->as('user.')
                ->namespace($this->namespace . '\\User')
                ->group(base_path('routes/user.php'));

            Route::middleware(['web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())
                ->as('web.')
                ->namespace($this->namespace . '\\Web')
                ->group(base_path('routes/web.php'));
        });
    }
}
