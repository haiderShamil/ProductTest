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
            // $table->integer('cat_id');
            $table->integer('unit_price');
            $table->float('pur_price');
            $table->date('model');
            // $table->integer('hist_id');
            $table->mediumText('description');
            $table->date('expire');
            $table->date('production');
            // $table->integer('product_status_id');
            // $table->integer('product_stock_id');
            $table->integer('qty');
            $table->integer('unitinstock');
            $table->integer('min_qty');
            $table->integer('max_qty');
            $table->unsignedBigInteger('stock_id');
            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
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
