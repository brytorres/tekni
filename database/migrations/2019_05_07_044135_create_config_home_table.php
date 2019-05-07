<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_home', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sort_position')->unsigned()->nullable();
            $table->string('title', 191);
            $table->string('description', 191)->nullable();
            $table->string('key', 100);
            $table->string('value', 191);
            $table->enum('type', ['string', 'integer', 'boolean', 'float', 'css', 'role'])->nullable();
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
        Schema::dropIfExists('config_home');
    }
}
