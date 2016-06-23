<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PicsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picsDatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('type',255);
            $table->integer('price');
            $table->string('image',255);
            $table->string('about',255);
            $table->string('other');
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
        Schema::drop('picsDatas');
    }
}
