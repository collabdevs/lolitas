<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{

    public function up()
    {
        Schema::create('carts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc')->nullable();
            $table->date('deal_at');
            $table->decimal('total', 5, 2);
            $table->integer('status')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('store_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('store_id')
                ->references('id')
                ->on('stores');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('carts');
    }
}
