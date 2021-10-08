<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
           
            $table->decimal('price');
         $table->string('description');
         $table->string('image1')->nullable();
         $table->string('image2')->nullable();
         $table->string('image3')->nullable();
       
            
            $table->unsignedbigInteger('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
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
