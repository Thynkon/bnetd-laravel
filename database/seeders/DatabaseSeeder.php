<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BanSeeder::class,
            NicProtocolTrafficSeeder::class,
            NicGlobalTrafficSeeder::class,
        ]);
    }
}
