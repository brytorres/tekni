<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('legal_name', 191);
            $table->string('alias', 191)->nullable();
            $table->bigInteger('phone_primary')->nullable();
            $table->bigInteger('phone_secondary')->nullable();
            $table->string('email', 191)->nullable();
            $table->string('address1', 191);
            $table->string('address2', 191)->nullable();
            $table->string('city', 191);
            $table->string('state', 191);
            $table->bigInteger('zip_code');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('soundcloud')->nullable();
            $table->string('bandcamp')->nullable();
            $table->string('reverbnation')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
