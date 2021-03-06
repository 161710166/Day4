<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nis');
            $table->string('nama');
            $table->string('jk');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->unsignedInteger('kelas_id');
            $table->foreign('kelas_id')->references('id')->on('kelas')->ondelete('casade');

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
        Schema::dropIfExists('siswas');
    }
}
