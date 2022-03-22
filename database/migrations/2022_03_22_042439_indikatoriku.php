<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Indikatoriku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikatoriku', function (Blueprint $table) {
            $table->id();
            $table->longtext('indikatordesc');
            $table->unsignedBigInteger('jenisiku');
            $table->foreign('jenisiku')->references('id')->on('jenisiku');
            $table->longtext('targetdesc');
            $table->string('targetiku');
            $table->string('sifatkerja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indikatoriku');
    }
}
