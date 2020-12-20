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
            $table->id();
            $table->string('kodecekin',3);
            $table->string('kodepesan',3);
            $table->string('kodekamar',10);
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
