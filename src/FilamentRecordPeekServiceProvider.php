<?php

namespace MarJose123\FilamentRecordPeek;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentRecordPeekServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-record-peek';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-record-peek' => __DIR__.'/../resources/dist/filament-record-peek.css',
    ];

    protected array $scripts = [
        'plugin-filament-record-peek' => __DIR__.'/../resources/dist/filament-record-peek.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-record-peek' => __DIR__ . '/../resources/dist/filament-record-peek.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
