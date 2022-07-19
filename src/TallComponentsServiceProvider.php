<?php

namespace Slakbal\TallComponents;

// use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Slakbal\TallComponents\View\Components\Date;

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

        //Blade Components
        Blade::component('datetime-picker', Date\DateTimePicker::class);
        // Blade::component('date-picker', Date\DatePicker::class);
        // Blade::component('time-picker', Date\TimePicker::class);

        //Livewire Components
        // Livewire::component('date-picker', Date\DatePicker::class);

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/tall-components.php', 'tall-components');
    }
}
