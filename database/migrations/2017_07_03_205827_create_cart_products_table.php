<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartProductsTable extends Migration
{

    public function up()
    {
        Schema::create('cart_products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc')->nullable();
            $table->date('added_at');
            $table->decimal('price', 5, 2);
            $table->decimal('discount', 5, 2);
            $table->integer('quantity')->unsigned();
            $table->integer('cart_id')->unsigned();
            $table->foreign('cart_id')
                ->references('id')
                ->on('carts');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('cart_products');
    }
}
