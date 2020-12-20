<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpengunjungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpengunjung', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kodepengunjung');
            $table->foreign('kodepengunjung')->references("id")->on("users");
            $table->string('nama',100);
            $table->string('alamat',100);
            $table->date('tgllahir');
            $table->enum('jeniskelamin',['laki-laki','perempuan']);
            $table->string('nohp',15);
            $table->string('noktp',20);
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
        Schema::dropIfExists('tblpengunjung');
    }
}
