<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcekoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcekout', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodecekin');
            $table->foreign('kodecekin')->references("id")->on("tblcekin");
            $table->unsignedBigInteger('kodepesan');
            $table->foreign('kodepesan')->references("id")->on("tblpemesanan");
            $table->date('tglcekout');
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
        Schema::dropIfExists('tblcekout');
    }
}
