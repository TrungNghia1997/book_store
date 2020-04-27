<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',191);
            $table->string('id_product',191)->unique();
            $table->string('nameslug',191);
            $table->integer('author_id');           
            $table->integer('category_id');          
            $table->integer('is_feature')->nullable();
            $table->string('avatar', 191);
            $table->text('images');
            $table->bigInteger('price');
            $table->integer('sale')->nullable();  
            $table->text('short_description');          
            $table->longText('description');
            $table->integer('status');
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
        Schema::dropIfExists('products');
    }
}
