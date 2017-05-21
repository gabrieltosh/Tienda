<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Productos;

class tablaProductosSeeder extends Seeder
{
    public function run()
    {
       $data= array(
        [
            'name'=>'Polera 1',
            'slug'=>'Polera-1',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo pariatur illum labore at cum, nihil ut rem, commodi quia impedit sapiente ea, obcaecati cupiditate quam, ex corporis aut totam.',
            'extraer'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'precio'=>150.00,
            'imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzlOZ63uRB3QCmxLPAaRJRnCFhQ22jlVtv1NFIQkKa78r5fAJqm2hG6w',
            'visible'=>1,
            'deleted_at'=>null,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'categoria_id'=>1,
        ],
        [
            'name'=>'Polera 2',
            'slug'=>'Polera-2',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo pariatur illum labore at cum, nihil ut rem, commodi quia impedit sapiente ea, obcaecati cupiditate quam, ex corporis aut totam.',
            'extraer'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'precio'=>100.00,
            'imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzlOZ63uRB3QCmxLPAaRJRnCFhQ22jlVtv1NFIQkKa78r5fAJqm2hG6w',
            'visible'=>1,
            'deleted_at'=>null,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'categoria_id'=>2
       ],
       [
            'name'=>'Polera 3',
            'slug'=>'Polera-3',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo pariatur illum labore at cum, nihil ut rem, commodi quia impedit sapiente ea, obcaecati cupiditate quam, ex corporis aut totam.',
            'extraer'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'precio'=>100.00,
            'imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzlOZ63uRB3QCmxLPAaRJRnCFhQ22jlVtv1NFIQkKa78r5fAJqm2hG6w',
            'visible'=>1,
            'deleted_at'=>null,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'categoria_id'=>1
       ],
       [
            'name'=>'Polera 4',
            'slug'=>'Polera-4',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo pariatur illum labore at cum, nihil ut rem, commodi quia impedit sapiente ea, obcaecati cupiditate quam, ex corporis aut totam.',
            'extraer'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'precio'=>100.00,
            'imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzlOZ63uRB3QCmxLPAaRJRnCFhQ22jlVtv1NFIQkKa78r5fAJqm2hG6w',
            'visible'=>1,
            'deleted_at'=>null,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'categoria_id'=>2
       ],
       [
            'name'=>'Polera 5',
            'slug'=>'Polera-5',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo pariatur illum labore at cum, nihil ut rem, commodi quia impedit sapiente ea, obcaecati cupiditate quam, ex corporis aut totam.',
            'extraer'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'precio'=>100.00,
            'imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzlOZ63uRB3QCmxLPAaRJRnCFhQ22jlVtv1NFIQkKa78r5fAJqm2hG6w',
            'visible'=>1,
            'deleted_at'=>null,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'categoria_id'=>1
       ],
       [
            'name'=>'Polera 6',
            'slug'=>'Polera-6',
            'descripcion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo pariatur illum labore at cum, nihil ut rem, commodi quia impedit sapiente ea, obcaecati cupiditate quam, ex corporis aut totam.',
            'extraer'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'precio'=>100.00,
            'imagen'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzlOZ63uRB3QCmxLPAaRJRnCFhQ22jlVtv1NFIQkKa78r5fAJqm2hG6w',
            'visible'=>1,
            'deleted_at'=>null,
            'created_at'=>new DateTime,
            'updated_at'=>new DateTime,
            'categoria_id'=>2
       ]

       );
       productos::insert($data);
    }
}
