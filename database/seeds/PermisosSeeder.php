<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([ // create a new permiso
            'id' => '0KG0UE6cDbWJEpUT0mXvrTt4elQda4P0',
            'description' => 'permisos',
            'group' => 'admin',
            'is_super' => 0,
            'created_at' => '2020-07-16 17:31:51.565',
            'updated_at' => '2020-07-16 17:31:51.565'
        ]);
        Permission::create([ // create a new permiso
            'id' => 'KhyZUP7fU2aGoK69T7WvcffoCTNaX8eW',
            'description' => 'roles',
            'group' => 'admin',
            'is_super' => 0,
            'created_at' => '2020-07-16 17:31:51.565',
            'updated_at' => '2020-07-16 17:31:51.565'
        ]);
        Permission::create([ // create a new permiso
            'id' => 'ODpmhhzqsIZcyENRCPz1rzpwAbhu2rrI',
            'description' => 'usuarios',
            'group' => 'admin',
            'is_super' => 0,
            'created_at' => '2020-07-16 17:31:51.565',
            'updated_at' => '2020-07-16 17:31:51.565'
        ]);
    }
}
