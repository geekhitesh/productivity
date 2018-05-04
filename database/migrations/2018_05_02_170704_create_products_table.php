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
            $table->integer('user_id');
            $table->integer('discount_id');
            $table->integer('product_category_id');
            $table->integer('product_sub_category_id')->nullable();
            $table->string('name');
            $table->text('description');
            $table->text('meta_tags');
            $table->integer('price');
            $table->text('image_url');
            $table->string('push_to_website',30);
            $table->string('featured',30)->nullable();
            $table->text('key_features',30)->nullable();
            $table->date('expiration_date')->nullable();
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
