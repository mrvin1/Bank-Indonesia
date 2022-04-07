<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('title');
            $table->longText('keterangan');
            $table->longText('linklampiran');
            $table->string('file1');
            $table->string('file2');
            $table->string('file3');
            $table->timestamps();
            $table->dateTime('start');
            $table->dateTime('end');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
