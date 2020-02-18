<?php
namespace Acme;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->publishes([__DIR__.'/../publishable/assets' => public_path('assets')]);
    }
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__ . '/../routes/helloworld.php';
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'helloworldpackage');
    }
}