<?php
namespace Munettt\Jupiter\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class JupiterServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerViews();

		require __DIR__ . '/../Http/routes.php';
    }


    /**
     * Register views
     */
    public function registerViews()
    {
		
		$this->loadViewsFrom(__DIR__.'/../../resources/views', 'jupiter');
		$this->publishes([__DIR__.'/../../resources/views' => resource_path('views/vendor/jupiter')],'views');
		$this->publishes([base_path('/vendor/munettt/jupiter-panel/images') => public_path('/vendor/jupiter/images')],'asset');
		$this->publishes([base_path('/vendor/munettt/jupiter-panel/dist') => public_path('/vendor/jupiter')],'asset');
      
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
	}
}
