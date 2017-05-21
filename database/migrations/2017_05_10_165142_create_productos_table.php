<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('slug');
            $table->text('descripcion');
            $table->string('extraer',300);
            $table->decimal('precio',5,2);
            $table->string('imagen',300);
            $table->boolean('visible');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('cascade');
            $table->SoftDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
