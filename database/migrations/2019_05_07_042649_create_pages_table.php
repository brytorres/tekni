<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_page_id')->unsigned()->nullable();
            $table->string('title');
            $table->boolean('is_visible')->nullable()->default(false);
            $table->boolean('is_draft')->nullable()->default(false);
            $table->string('roles_can_view')->nullable();
            $table->string('roles_can_edit_admin')->nullable();
            $table->string('roles_can_edit_basic')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('pages')->insert([
            [
                'parent_page_id' => null,
                'title' => 'Coming Soon',
                'is_visible' => 1,
                'is_draft' => 0,
                'roles_can_view' => null,
                'roles_can_edit_admin' => null,
                'roles_can_edit_basic' => null,
            ],
            [
                'parent_page_id' => null,
                'title' => 'Home',
                'is_visible' => 0,
                'is_draft' => 1,
                'roles_can_view' => null,
                'roles_can_edit_admin' => null,
                'roles_can_edit_basic' => null,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
