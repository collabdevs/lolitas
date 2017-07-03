<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{

    public function up()
    {
        Schema::create('contents', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc')->nullable();
            $table->date('published_at');
            $table->integer('categorie_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('categorie_id')
                ->references('id')
                ->on('categories');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('contents');
    }
}
