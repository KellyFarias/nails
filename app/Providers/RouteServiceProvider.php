<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

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
    protected $namespaceCustomer = 'App\\Http\\Controllers\\Api\\Customer';
    protected $namespaceBusiness = 'App\\Http\\Controllers\\Api\\Business';
    protected $namespaceEmployee = 'App\\Http\\Controllers\\Api\\Employee';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
            Route::middleware('api')
                ->namespace($this->namespaceBusiness)
                ->prefix('api/business')
                ->group(base_path('routes/business.php'));
            Route::middleware('api')
                ->namespace($this->namespaceEmployee)
                ->prefix('api/business')
                ->group(base_path('routes/employee.php'));
            Route::middleware('api')
                ->namespace($this->namespaceCustomer)
                ->prefix('api/customer')
                ->group(base_path('routes/customer.php'));
            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}