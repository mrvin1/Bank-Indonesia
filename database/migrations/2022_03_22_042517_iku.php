<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Iku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikus', function (Blueprint $table) {
            $table->id('ikuid');
            $table->unsignedBigInteger('indikator');
            $table->foreign('indikator')->references('id')->on('indikatoriku');
            $table->longText('realisasi');
            $table->string('status');
            $table->longText('keterangan');
            $table->string('name');
            $table->timestamps();
            $table->date('periode', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ikus');
    }
}
