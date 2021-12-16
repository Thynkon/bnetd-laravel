<?php

namespace Database\Seeders;

use Database\Factories\NicProtocolTrafficFactory;
use Illuminate\Database\Seeder;
use App\Models\NicGlobalTraffic;

class NicGlobalTrafficSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NicGlobalTraffic::factory()->count(10000)->create();
    }
}
