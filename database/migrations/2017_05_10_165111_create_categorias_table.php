<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255);
            $table->string('slug',255);
            $table->text('descripcion');
            $table->string('color');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
