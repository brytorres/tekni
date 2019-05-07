<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('project_id')->unsigned()->nullable();
            $table->integer('sort_position')->unsigned()->nullable();
            $table->string('title', 191)->nullable();
            $table->text('description')->nullable();
            $table->float('price')->nullable();
            $table->string('address1', 191);
            $table->string('address2', 191)->nullable();
            $table->string('city', 191);
            $table->string('state', 191);
            $table->bigInteger('zip_code');
            $table->bigInteger('primary_contact_phone');
            $table->string('primary_contact_email', 191);
            $table->bigInteger('secondary_contact_phone')->nullable()->default(null);
            $table->string('secondary_contact_email', 191)->nullable()->default(null);
            $table->string('categories')->nullable();
            $table->string('genre', 100)->nullable();
            $table->string('tags')->nullable();
            $table->string('images')->nullable();
            $table->string('facebook')->nullable();
            $table->string('other_online_links')->nullable();
            $table->dateTime('event_datetime')->nullable();
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
        Schema::dropIfExists('events');
    }
}
