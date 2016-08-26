<?php
namespace Svfnix\Xcrud;

use Illuminate\Support\ServiceProvider;

class XcrudServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('xcrud', function ($app) {
            return Xcrud::get_instance();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('xcrud');
    }

}
