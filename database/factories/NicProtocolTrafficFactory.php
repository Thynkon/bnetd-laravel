<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NicProtocolTrafficFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ports = [22, 80, 443];
        $nic = "eth0";

        return [
            'ip' => long2ip(rand(0, 4294967295)),
            'pkt_len' => $this->faker->numberBetween(1, 2048), // from 1 to 2kb
            'ts' => time(),
            'port' => $this->faker->randomElement($ports),
            'iface' => $nic,
        ];
    }
}
