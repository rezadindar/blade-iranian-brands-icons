<?php

declare(strict_types=1);

namespace MRDindar\IranianBrandsIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeIranianBrandsIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-iranian-brands-icons', []);

            $factory->add('iranian-brands-icons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-iranian-brands-icons.php', 'blade-iranian-brands-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-iranian-brands-icons'),
            ], 'blade-iranian-brands-icons');

            $this->publishes([
                __DIR__.'/../config/blade-iranian-brands-icons.php' => $this->app->configPath('blade-iranian-brands-icons.php'),
            ], 'blade-iranian-brands-icons-config');
        }
    }
}
