<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //User::query()->truncate(); // truncate user table each time of seeders run
        User::create([ // create a new user
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'username' => 'Administrator',
            'nombre' => 'Administrator',
            'avatar' => 'assets/avatars/50-king.svg',
            'apellido_paterno' => 'Administrator',
            'apellido_materno' => 'Administrator',
            'alias' => 'Admin',
            'is_superuser' => 1
        ]);
        User::create([ // create a new user
            'email' => 'berrio',
            'password' => Hash::make('b12kamas_2020'),
            'username' => 'berrio',
            'nombre' => 'H.B.C. Berriozabal 12 camas',
            'avatar' => 'assets/avatars/50-king.svg',
            'apellido_paterno' => '',
            'apellido_materno' => '',
            'alias' => 'Rubi',
            'is_superuser' => 0,
            'created_at' => '2020-05-25 17:31:51.565',
            'updated_at' => '2020-05-25 17:31:51.565'
        ]);
        
        User::create([ // create a new user
            'email' => 'bersain',
            'password' => Hash::make('bersain2020'),
            'username' => 'Bersain',
            'avatar' => 'assets/avatars/50-king.svg',
            'nombre' => 'Bersain',
            'apellido_paterno' => '',
            'apellido_materno' => '',
            'alias' => 'Bersa',
            'is_superuser' => 0,
            'created_at' => '2020-03-27 17:31:51.565',
            'updated_at' => '2020-03-27 17:31:51.565'
        ]);
        User::create([ // create a new user
            'email' => 'salvador',
            'password' => Hash::make('salvador2020'),
            'username' => 'Salvador',
            'avatar' => 'assets/avatars/50-king.svg',
            'nombre' => 'Salvador',
            'apellido_paterno' => '',
            'apellido_materno' => '',
            'alias' => 'GOV',
            'is_superuser' => 0,
            'created_at' => '2020-03-27 17:31:51.565',
            'updated_at' => '2020-03-27 17:31:51.565'
        ]);

        User::create([ // create a new user
            'email' => 'panchito',
            'password' => Hash::make('panchito2020'),
            'username' => 'Panchito',
            'avatar' => 'assets/avatars/50-king.svg',
            'nombre' => 'Panchito',
            'apellido_paterno' => '',
            'apellido_materno' => '',
            'alias' => 'Panchito',
            'is_superuser' => 0,
            'created_at' => '2020-03-27 17:31:51.565',
            'updated_at' => '2020-03-27 17:31:51.565'
        ]);

        User::create([ // create a new user
            'email' => 'rosa',
            'password' => Hash::make('rosacamacho'),
            'username' => 'rosa',
            'avatar' => 'assets/avatars/50-king.svg',
            'nombre' => 'rosa',
            'apellido_paterno' => 'auralia',
            'apellido_materno' => 'camacho',
            'alias' => 'CAR',
            'is_superuser' => 0,
            'created_at' => '2020-03-27 17:31:51.565',
            'updated_at' => '2020-03-27 17:31:51.565'
        ]);

        User::create([ // create a new user
            'email' => 'pio',
            'password' => Hash::make('pioperez'),
            'username' => 'pio',
            'avatar' => 'assets/avatars/50-king.svg',
            'nombre' => 'pio oswaldo',
            'apellido_paterno' => 'perez',
            'apellido_materno' => 'velasquez',
            'alias' => 'PEV',
            'is_superuser' => 0,
            'created_at' => '2020-03-27 17:31:51.565',
            'updated_at' => '2020-03-27 17:31:51.565'
        ]);

        User::create([ // create a new user
            'email' => 'contrato',
            'password' => Hash::make('contrato2020'),
            'username' => 'contrato',
            'avatar' => 'assets/avatars/50-king.svg',
            'nombre' => 'contrato',
            'apellido_paterno' => '',
            'apellido_materno' => '',
            'alias' => 'CON',
            'is_superuser' => 0,
            'created_at' => '2020-03-27 17:31:51.565',
            'updated_at' => '2020-03-27 17:31:51.565'
        ]);

        User::create([ // create a new user
            'email' => 'rubi',
            'password' => Hash::make('rubi2020'),
            'username' => 'rubi',
            'avatar' => 'assets/avatars/50-king.svg',
            'nombre' => 'Rubi',
            'apellido_paterno' => '',
            'apellido_materno' => '',
            'alias' => 'Rubi',
            'is_superuser' => 0,
            'created_at' => '2020-03-27 17:31:51.565',
            'updated_at' => '2020-03-27 17:31:51.565'
        ]);
    }
}
