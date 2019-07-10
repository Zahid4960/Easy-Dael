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
          $table->increments('id');
          $table->integer('category_id')->unsigned();
          $table->integer('brand_id')->unsigned();
          $table->string('title');
          $table->string('description');
          $table->string('slug');
          $table->integer('quantity');
          $table->float('price');
          $table->tinyInteger('status')->default(0);
          $table->float('offer_price');
          $table->integer('admin_id')->unsigned();
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
