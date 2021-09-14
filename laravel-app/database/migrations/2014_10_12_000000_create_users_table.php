<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            //$table->id();
            $table->jsonb('profile_picture')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();;
            $table->boolean('state')->nullable();
            $table->boolean('isLogin')->nullable();
            $table->integer('role_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('own_id')->nullable();
            $table->jsonb('tokens')->nullable();
            $table->timestamp('login_time_at')->nullable();
            $table->timestamp('logout_time_at')->nullable();
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
