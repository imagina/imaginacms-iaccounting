<?php

namespace Modules\Iaccounting\Providers;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Iaccounting\Listeners\RegisterIaccountingSidebar;

class IaccountingServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
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
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterIaccountingSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            // append translations
        });


    }

    public function boot()
    {
       
        $this->publishConfig('iaccounting', 'config');
        $this->publishConfig('iaccounting', 'crud-fields');

        $this->mergeConfigFrom($this->getModuleConfigFilePath('iaccounting', 'settings'), "asgard.iaccounting.settings");
        $this->mergeConfigFrom($this->getModuleConfigFilePath('iaccounting', 'settings-fields'), "asgard.iaccounting.settings-fields");
        $this->mergeConfigFrom($this->getModuleConfigFilePath('iaccounting', 'permissions'), "asgard.iaccounting.permissions");

        //$this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Iaccounting\Repositories\PurchaseRepository',
            function () {
                $repository = new \Modules\Iaccounting\Repositories\Eloquent\EloquentPurchaseRepository(new \Modules\Iaccounting\Entities\Purchase());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Iaccounting\Repositories\Cache\CachePurchaseDecorator($repository);
            }
        );
// add bindings

    }


}
