<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkamar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodepegawai');
            $table->foreign('kodepegawai')->references("id")->on("users");
            $table->enum('tipe',['eksklusif','vip','ekonomi']);
            $table->string('fasilitas',20);
            $table->string('tarifkamar',20);
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
        Schema::dropIfExists('tblkamar');
    }
}
