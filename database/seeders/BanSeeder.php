<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ban;
use Faker\Factory as Faker;

class BanSeeder extends Seeder
{
        private $faker;

        public function __construct()
        {
                // for some reason, faker does not use the faker_locale setting defined in config/app.php
                $this->faker = Faker::create();
        }

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                $countries = [
                        'Moldova', 'Armenia', 'Switzerland', 'Burundi', 'Morocco',
                        'Macao', 'Panama', 'Fiji', 'United States Minor Outlying Islands', 'China'
                ];

                // I know that I should use Ban::create() and pass an array of arrays
                // but by doing this, in mongodb I have an object containing all logs instead of
                // a list of logs
                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 22,
                        'jail' => 'sshd',
                        'username' => 'root',
                ]);

                Ban::insert([
                                'ip' => $this->faker->ipv4(),
                                'country' => $this->faker->randomElement($countries),
                                'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                                'port' => 22,
                                'jail' => 'sshd',
                                'username' => 'nginx',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 22,
                        'jail' => 'sshd',
                        'username' => 'nextcloud',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 22,
                        'jail' => 'sshd',
                        'username' => 'pi',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 22,
                        'jail' => 'sshd',
                        'username' => 'ubuntu-user',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nextcloud',
                        'uri' => '/',
                        'method' => 'GET',
                        'user_agent' => 'Mozilla/5.0 (Linux; Android 6.0.1; SM-G532M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.136 Mobile Safari/537.36',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nextcloud',
                        'uri' => '/toto.html',
                        'method' => 'GET',
                        'user_agent' => 'Opera/9.86 (Windows NT 5.01; en-US) Presto/2.12.281 Version/11.00',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nextcloud',
                        'uri' => '/register',
                        'method' => 'POST',
                        'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36 RuxitSynthetic/1.0 v462564867 t8145687281368250631 athfa3c3975 altpub cvcv=2 smf=0',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nextcloud',
                        'uri' => '/.git',
                        'method' => 'GET',
                        'user_agent' => 'Mozilla/5.0 (Linux; Android 6.0.1; SM-G532M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.136 Mobile Safari/537.36',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nextcloud',
                        'uri' => '/.env',
                        'method' => 'GET',
                        'user_agent' => 'Mozilla/5.0 (Linux; Android 6.0.1; SM-G532M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.136 Mobile Safari/537.36',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nginx-badbots',
                        'uri' => '/index.php?s=/Index/\x5Cthink\x5Capp/invokefunction&function=call_user_func_array&vars[0]=md5&vars[1][]=HelloThinkPHP21',
                        'method' => 'GET',
                        'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nginx-badbots',
                        'uri' => '/index.php?s=/Index/\x5Cthink\x5Capp/invokefunction&function=call_user_func_array&vars[0]=md5&vars[1][]=HelloThinkPHP21',
                        'method' => 'POST',
                        'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nginx-badbots',
                        'uri' => '/index.php',
                        'method' => 'GET',
                        'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nginx-noproxy',
                        'uri' => '/cgi-bin/.%2e/.%2e/.%2e/.%2e/bin/sh',
                        'method' => 'POST',
                        'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36 RuxitSynthetic/1.0 v6602615767553383452 t6816603945225267545 ath259cea6f altpriv cvcv=2 smf=0',
                ]);

                Ban::insert([
                        'ip' => $this->faker->ipv4(),
                        'country' => $this->faker->randomElement($countries),
                        'ts' => $this->faker->dateTimeThisYear()->getTimestamp(),
                        'port' => 443,
                        'jail' => 'nginx-noproxy',
                        'uri' => '/redirect?host=124.5.1.2',
                        'method' => 'GET',
                        'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36 RuxitSynthetic/1.0 v6602615767553383452 t6816603945225267545 ath259cea6f altpriv cvcv=2 smf=0',
                ]);

        }
}
