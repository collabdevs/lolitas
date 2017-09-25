<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{

    public function up()
    {
        Schema::create('tags', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->text('desc')->nullable();
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');

        });
    }

    public function down()
    {
        Schema::drop('tags');
    }
}
