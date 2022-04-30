<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('address', 200);
            $table->string('tel', 50);
            $table->string('opening', 50);
            $table->string('closed', 50);
            $table->string('cafe_image1');
            $table->string('cafe_image2');
            $table->string('cafe_image3');
            $table->string('cafe_image4');
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
        Schema::dropIfExists('cafes');
    }
}
