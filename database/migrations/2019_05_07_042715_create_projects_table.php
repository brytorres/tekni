<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sort_position')->unsigned()->nullable();
            $table->integer('page_id')->nullable();
            $table->string('title', 191)->nullable();
            $table->text('description')->nullable();
            $table->json('categories')->nullable();
            $table->string('genre', 100)->nullable();
            $table->json('tags')->nullable();
            $table->json('images')->nullable();
            $table->string('store_url')->nullable();
            $table->string('soundcloud')->nullable();
            $table->string('bandcamp')->nullable();
            $table->string('reverbnation')->nullable();
            $table->json('other_online_links')->nullable();
            $table->dateTime('released_on')->nullable();
            $table->string('publishing', 191)->nullable();
            $table->string('copyright', 191)->nullable();
            $table->boolean('is_visible')->nullable()->default(false);
            $table->boolean('is_draft')->nullable()->default(false);
            $table->dateTime('publish_at')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
