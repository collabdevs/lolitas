<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc')->nullable();
            $table->date('published_at');
            $table->decimal('price', 5, 2);
            $table->decimal('promo', 5, 2);
            $table->string('teaser');
            $table->integer('quantity')->unsigned();
            $table->integer('min_quantity')->unsigned();
            $table->string('url');
            $table->integer('store_id')->unsigned();
            $table->integer('product_sub_categorie_id')->unsigned();
            $table->integer('manufacturer_id')->unsigned();
            $table->foreign('store_id')
                ->references('id')
                ->on('stores');
            $table->foreign('product_sub_categorie_id')
                ->references('id')
                ->on('product_sub_categories');
            $table->foreign('manufacturer_id')
                ->references('id')
                ->on('manufacturers');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('products');
    }
}
