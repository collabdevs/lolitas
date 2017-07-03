<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('product_categories', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->text('desc')->nullable();
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('product_categories');
    }
}
