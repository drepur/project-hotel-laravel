<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcekinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcekin', function (Blueprint $table) {
            $table->string('kodecekin',20);
            $table->string('kodepesan',20);
            $table->unsignedBigInteger('kodekamar');
            $table->foreign('kodekamar')->references("id")->on("tblkamar");
            $table->date('tglmasuk');
            $table->date('tglkeluar');
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
        Schema::dropIfExists('tblcekin');
    }
}
