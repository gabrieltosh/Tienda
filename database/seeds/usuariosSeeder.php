<?php

use Illuminate\Database\Seeder;
use App\User;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= array(
        [
            'nombre'=>'Gabriel',
            'apellido'=>'Pinto',
            'email'=>'angel22586310@gmail.com',
            'usuario'=>'Gabriel',
            'password'=>\Hash::make('12345678'),
            'tipo'=>'admin',
            'activo'=>1,
            'direccion'=>'Calle 1/La Paz/Bolivia',
            'deleted_at'=>null,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
        ],
        [
            'nombre'=>'Briann',
            'apellido'=>'Teran',
            'email'=>'angel60133971@gmail.com',
            'usuario'=>'Briann',
            'password'=>\Hash::make('12345678'),
            'tipo'=>'usuario',
            'activo'=>1,
            'direccion'=>'Calle 2/La Paz/Bolivia',
            'deleted_at'=>null,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
        ]);
        User::insert($data);
    }
}
