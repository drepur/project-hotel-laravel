<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('kodepengunjung',3);
            $table->string('kodekamar',10);
            $table->date('tglpesan');
            $table->string('lamanginap',10);
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
        Schema::dropIfExists('tblpemesanan');
    }
}
