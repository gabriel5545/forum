<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvDTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DvD', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("adal_leikari");
            $table->integer('utgafa');
            $table->integer('verd');
            $table->string("flokkur");
            $table->unsignedInteger('leikstjori_ID');
            $table->foreign('leikstjori_ID')->references('id')->on('leikstjori');
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
        Schema::dropIfExists('leikstjori');
    }
}
