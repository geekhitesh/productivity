<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_instances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->integer('price');
            $table->string('discount_type');
            $table->integer('discount_value');
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
        Schema::dropIfExists('product_instances');
    }
}
