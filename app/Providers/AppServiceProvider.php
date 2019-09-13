<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use \Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        Blade::directive('admin', function () {
            return '<?php if (auth()->user()->isAdmin()): ?>';
        });

        Blade::directive('endadmin', function () {
            return "<?php endif; ?>";
        });
        
        Blade::directive('dosenoradmin', function () {
            return '<?php if (auth()->user()->isDosenOrAdmin()): ?>';
        });

        Blade::directive('enddosenoradmin', function () {
            return "<?php endif; ?>";
        });
    }
}
