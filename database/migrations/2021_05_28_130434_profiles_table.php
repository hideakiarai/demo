<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->string('image_path')->nullable();
            $table->string('user_name');
            $table->string('profession');
            $table->string('country');
            $table->string('self_introduction');
            $table->timestamp('updated_by');
            $table->timestamp('updated_at');
            $table->unsigneInteger('created_by');
            $table->unsigneInteger('created_at');
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
