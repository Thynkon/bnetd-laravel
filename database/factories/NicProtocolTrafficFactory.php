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
        $countries = [
            'Moldova', 'Armenia', 'Switzerland', 'Burundi', 'Morocco',
            'Macao', 'Panama', 'Fiji', 'United States Minor Outlying Islands', 'China'
        ];
        $ports = [22, 80, 443];
        $nic = "eth0";

        return [
            'ip' => $this->faker->ipv4(),
            'country' => $this->faker->randomElement($countries),
            'pkt_len' => $this->faker->numberBetween(1, 2048), // from 1 to 2kb
            'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
            'port' => $this->faker->randomElement($ports),
            'iface' => $nic,
        ];
    }
}
