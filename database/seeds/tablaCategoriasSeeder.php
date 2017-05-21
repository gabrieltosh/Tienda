<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categorias;

class tablaCategoriasSeeder extends Seeder
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
            'nombre'=>'SuperHeroes',
            'slug'=>'SuperHeroes',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo pariatur illum labore at cum, nihil ut rem, commodi quia impedit sapiente ea, obcaecati cupiditate quam, ex corporis aut totam.',
            'color' =>'#440022',
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'deleted_at'=>null
       ],    
       [
            'nombre'=>'Anime',
            'slug'=>'Anime',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo pariatur illum labore at cum, nihil ut rem, commodi quia impedit sapiente ea, obcaecati cupiditate quam, ex corporis aut totam.',
            'color' =>'#440022',
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'deleted_at'=>null
       ]
       );
       categorias::insert($data);
    }
}
