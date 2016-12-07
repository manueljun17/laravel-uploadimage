<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageuploads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageuploads', function (Blueprint $table) {
            $table->string('title',400)->default('');//the column that holds the image's name
            $table->string('image',400)->default('');//the column that holds the image's filename
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
        Schema::drop('imageuploads');
    }
}
