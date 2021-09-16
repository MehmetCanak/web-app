<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            //$table->id();

            $table->bigIncrements('id');

            $table->string('title', 100)->unique();
            $table->string('meta_title', 100)->unique();
            $table->text('content');
            $table->string('slug', 200)->unique();
            $table->timestamp('published_time_at')->nullable();
            $table->boolean('state')->nullable()->default(0);
            $table->integer('own_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('post');
    }
}