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
            $table->id('UserId');
            $table->string('Name');
            $table->string('Email')->unique();
            $table->string('Password');
            //$table->timestamp('email_verified_at')->nullable();
            //$table->rememberToken();
            //$table->timestamps();
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->id('PostId');
            $table->string('Name');
            $table->string('WhereToStore');
            $table->unsignedBigInteger('UserId');
            
            $table->foreign('UserId')->references('UserId')->on('users')->onDelete('cascade');
        });
        Schema::create('likedPosts', function (Blueprint $table) {
            $table->integer('UserId');
            $table->integer('LikedPostId');
            $table->primary('UserId','LikedPostId');
            $table->foreign('UserId')->references('UserId')->on('users')->onDelete('cascade');
            $table->foreign('LikedPostId')->references('PostId')->on('posts')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
       // Schema::dropIfExists('likedPosts');
    }
}
