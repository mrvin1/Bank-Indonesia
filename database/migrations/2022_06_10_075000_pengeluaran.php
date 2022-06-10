<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengeluaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengeluaran', function (Blueprint $table) {
            $table->id();
            $table->string('wilayah');
            $table->decimal('rumahtangga',5,2);
            $table->decimal('lnprt',5,2);
            $table->decimal('pemerintah',5,2);
            $table->decimal('bruto',5,2);
            $table->decimal('inventori',5,2);
            $table->decimal('eksporbarangjasa',5,2);
            $table->decimal('pdrb',5,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengeluaran');
    }
}
