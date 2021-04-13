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
            $table->unsignedBigInteger('usersid');
            $table->unsignedBigInteger('likedpostid');
            $table->primary(['usersid','likedpostid']);
            $table->foreign('usersid')->references('userid')->on('users')->onDelete('cascade');
            $table->foreign('likedpostid')->references('postid')->on('posts')->onDelete('cascade');
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
