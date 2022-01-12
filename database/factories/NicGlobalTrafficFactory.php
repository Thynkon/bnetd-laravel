<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NicGlobalTrafficFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $rx_base = 1000000;
        static $tx_base = 10000;
        $increment = 3670016; // + 5Mb

        return [
            'rx' => $rx_base + $increment + $this->faker->randomNumber(),
            'tx' => $tx_base + $increment + $this->faker->randomNumber(),
            'ts' => $this->faker->dateTimeBetween('+0 days','+2 days')->getTimestamp(),
            'iface' => 'eth0',
        ];
    }
}
