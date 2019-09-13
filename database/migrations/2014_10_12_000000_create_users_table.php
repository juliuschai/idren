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
            $table->string('name')->nullable();
            $table->string('username')->unique();
            $table->string('phone_number', 20)->nullable();
            $table->bigInteger('instansi_id')->unsigned()->nullable();
            $table->foreign('instansi_id')->references('id')->on('universities')->onDelete('cascade')->onUpdate('cascade');
            $table->string('peran', 10);
            $table->string('profile_picture');
            $table->string('email')->unique();
            $table->integer('views');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
