<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191)->nullable();
            $table->integer('sort_position')->unsigned()->nullable();
            $table->string('genre', 191)->nullable();
            $table->string('specialty', 100)->nullable();
            $table->json('tags')->nullable();
            $table->text('bio')->nullable();
            $table->json('images')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('soundcloud')->nullable();
            $table->string('bandcamp')->nullable();
            $table->string('reverbnation')->nullable();
            $table->json('other_online_links')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
}
