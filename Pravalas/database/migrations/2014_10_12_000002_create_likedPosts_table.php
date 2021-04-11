<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikedPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likedPosts', function (Blueprint $table) {
            $table->unsignedBigInteger('UsersID');
            $table->unsignedBigInteger('LikedPostId');
            $table->primary(['UsersID','LikedPostId']);
            $table->foreign('UsersID')->references('UserId')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('likedPosts');
    }
}
