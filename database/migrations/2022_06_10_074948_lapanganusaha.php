<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lapanganusaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapanganusaha', function (Blueprint $table) {
            $table->id();
            $table->string('wilayah');
            $table->string('industripengolahan');
            $table->string('perdagangan');
            $table->string('pertanian');
            $table->string('konstruksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lapanganusaha');
    }
}
