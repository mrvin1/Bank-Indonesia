<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Meeting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->longText('nama');
            $table->string('lokasi');
            $table->string('judul');
            $table->longText('tujuan');
            $table->longText('notulen');
            $table->longText('kesimpulan');
            $table->longText('linklampiran');
            $table->string('file1');
            $table->string('file2');
            $table->string('file3');
            $table->timestamps();
            $table->date('tanggalrapat', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetings');
    }
}
