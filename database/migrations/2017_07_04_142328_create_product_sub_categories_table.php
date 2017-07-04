<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSubCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('product_sub_categories', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->text('desc')->nullable();
            $table->string('url');
            $table->integer('product_categorie_id')->unsigned();
            $table->foreign('product_categorie_id')
                ->references('id')
                ->on('product_categories');

        });
    }

    public function down()
    {
        Schema::drop('product_sub_categories');
    }
}
