<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('order_product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //$table->increments('id');
            $table->primary(['order_id', 'product_id']); 
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->tinyInteger('quantity')->default(1);
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('order_product');
    }

}
