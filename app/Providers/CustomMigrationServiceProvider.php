<?php

namespace App\Providers;

use App\Repositories\MigrationRepository;
use Illuminate\Database\MigrationServiceProvider;

class CustomMigrationServiceProvider extends MigrationServiceProvider
{
    /**
     * Register the migration repository service.
     *
     * @return void
     */
    protected function registerRepository()
    {
        $this->app->singleton('migration.repository', function ($app) {
            $table = $app['config']['database.migrations'];

            return new MigrationRepository($app['db'], $table);
        });
    }
}
