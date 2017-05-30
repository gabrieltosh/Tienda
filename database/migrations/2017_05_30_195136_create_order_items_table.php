<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('precio',5,2);
            $table->integer('cantidad')->unsigned();
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')
                    ->references('id')
                    ->on('productos')
                    ->onDelete('cascade');
            $table->integer('orden_id')->unsigned();
            $table->foreign('orden_id')
                    ->references('id')
                    ->on('orders');
            $table->SoftDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_items');
    }
}
