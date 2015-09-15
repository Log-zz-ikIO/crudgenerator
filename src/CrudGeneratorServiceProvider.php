<?php

namespace CrudGenerator\CrudGenerator;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
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
        $this->commands(
            'CrudGenerator\CrudGenerator\CrudCommand',
            'CrudGenerator\CrudGenerator\CrudControllerCommand',
            'CrudGenerator\CrudGenerator\CrudModelCommand',
            'CrudGenerator\CrudGenerator\CrudMigrationCommand',
            'CrudGenerator\CrudGenerator\CrudViewCommand'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}
