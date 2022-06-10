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
            $table->decimal('industripengolahan',5,2);
            $table->decimal('perdagangan',5,2);
            $table->decimal('pertanian',5,2);
            $table->decimal('konstruksi',5,2);
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
