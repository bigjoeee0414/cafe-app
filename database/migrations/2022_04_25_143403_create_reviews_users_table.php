<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews_users', function (Blueprint $table) {
            $table->integer('reviews_id')->unsigned();    //students,subjectsテーブルのidが
            $table->integer('users_id')->unsigned();    //bigIncrementであった場合はbigIntegerにする
            $table->primary(['reviews_id', 'users_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews_users');
    }
}
