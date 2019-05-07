<?php

namespace Dnvcomp\Providers;

use Illuminate\Support\ServiceProvider;

use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('set', function ($exp) {
            list($name,$value) = explode(',',$exp);
            return "<?php $name = $value ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
