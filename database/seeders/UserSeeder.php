<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [   // Mario
                'firstname' => 'Mario',
                'lastname'  => 'Ferreira',
                'nickname'  => 'Thynkon',
                'email'     => 'thynkon@protonmail.com',
                'password'  => Hash::make('mariopw'),
                'active'    => true,
            ],
            [   // Noah
                'firstname' => 'Noah',
                'lastname'  => 'Delgado',
                'nickname'  => 'Tortuda',
                'email'     => 'noah.delgado@cpnv.ch',
                'password'  => Hash::make('noahpw'),
                'active'    => true,
            ],
            [   // Armand
                'firstname' => 'Armand',
                'lastname'  => 'Marechal',
                'nickname'  => 'Penfu',
                'email'     => 'armand.marechal@cpnv.ch',
                'password'  => Hash::make('armandpw'),
                'active'    => true,
            ],
        ]);
    }
}
