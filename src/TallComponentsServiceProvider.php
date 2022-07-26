<?php

namespace Slakbal\TallComponents;

// use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Slakbal\TallComponents\View\Components\Date;
use Illuminate\Foundation\AliasLoader;

class TallComponentsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/tall-components.php' => config_path('tall-components.php'),
        ], 'tall-components.config');

        // Publishing the views.
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/tall-components'),
        ], 'tall-components.views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tall-components');

        //Auto Load the Components Folder by direct guessing and matching of component names
        Blade::componentNamespace('TallComponents\\Views\\Components', 'tall-components');

        $this->bootDateTimeComponents();

        $this->bootLivewireComponents();
    }

    public function bootLivewireComponents()
    {
        //Livewire Components
        // Livewire::component('date-picker', Date\DatePicker::class);
    }

    public function bootDateTimeComponents()
    {
        //Blade Components
        Blade::component('tall-components::datetime-picker', Date\DateTimePicker::class);
        // Blade::component('package-name::your-component', 'your-component');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        //Load the config before anything else
        $this->mergeConfigFrom(__DIR__ . '/../config/tall-components.php', 'tall-components');
    }
}
