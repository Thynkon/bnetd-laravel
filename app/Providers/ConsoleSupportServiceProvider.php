<?php

namespace App\Providers;

use Illuminate\Support\AggregateServiceProvider;
use App\Providers\CustomMigrationServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;
use Illuminate\Foundation\Providers\ComposerServiceProvider;

class ConsoleSupportServiceProvider extends AggregateServiceProvider implements DeferrableProvider
{
    /**
     * The provider class names.
     *
     * @var string[]
     */
    protected $providers = [
        ArtisanServiceProvider::class,
        CustomMigrationServiceProvider::class,
        ComposerServiceProvider::class,
    ];
}
