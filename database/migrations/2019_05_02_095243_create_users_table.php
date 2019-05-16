<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');

            // $table->unsignedBigInteger('user_role_id')->nullable();
            // $table->foreign('user_role_id')->references('id')->on('user_roles')->nullable();
            
            // $table->unsignedBigInteger('image_id')->nullable();
            // $table->foreign('image_id')->references('id')->on('images')->nullable();

            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('street');
            $table->string('street_number');
            $table->string('zipcode');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->text('biography')->nullable();
            $table->integer('credit')->nullable();
            
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
        Schema::dropIfExists('users');
    }
}
