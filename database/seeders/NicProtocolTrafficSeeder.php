<?php

namespace Database\Seeders;

use App\Models\NicProtocolTraffic;
use Illuminate\Database\Seeder;

class NicProtocolTrafficSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NicProtocolTraffic::factory()->count(50000)->create();
    }
}
