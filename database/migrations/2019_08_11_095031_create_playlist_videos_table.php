<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('playlist_id')->unsigned();
            $table->foreign('playlist_id')->references('id')->on('playlists')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('video_id')->unsigned();
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
        Schema::dropIfExists('playlist_videos');
    }
}
