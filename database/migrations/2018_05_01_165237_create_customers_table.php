<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile_no',30);
            $table->string('profile_photo_url')->nullable();
            $table->date('date_of_birth');
            $table->string('email')->nullable();
            $table->string('password', 60)->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('newsletter',30)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('customers');
    }
}
