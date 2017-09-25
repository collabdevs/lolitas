<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{

    public function up()
    {
        Schema::create('coupons', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc')->nullable();
            $table->date('added_at');
            $table->decimal('price', 5, 2);
            $table->decimal('discount', 5, 2);
            $table->date('valid_until');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('coupons');
    }
}
