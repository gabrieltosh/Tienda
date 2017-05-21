<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();
        // $this->call(UsersTableSeeder::class);
        $this->call(tablaCategoriasSeeder::class);
        $this->call(tablaProductosSeeder::class);
        $this->call(usuariosSeeder::class);
        Model::reguard();
    }
}
