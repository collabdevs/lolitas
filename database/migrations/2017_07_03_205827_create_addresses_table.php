<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{

    public function up()
    {
        Schema::create('addresses', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('street');
            $table->string('number');
            $table->string('zipcode');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->integer('user_id')->unsigned();
            $table->integer('manufacturer_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('addresses');
    }
}
