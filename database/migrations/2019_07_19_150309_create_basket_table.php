<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table ->string('name',191);
            $table ->string('email',191);
            $table ->string('phone',191);
            $table ->string('address',191);            
            $table ->integer('status')->default(2);
            $table ->integer('checked')->default(2);
            $table ->string('nameproduct',191);
            $table ->string('qty',191);            
            $table ->string('sum',191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket');
    }
}
