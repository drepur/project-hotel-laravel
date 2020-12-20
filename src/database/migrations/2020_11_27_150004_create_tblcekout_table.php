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
            $table->string('kodecekout',3);
            $table->string('kodecekin',3);
            $table->string('kodepesan',3);
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
