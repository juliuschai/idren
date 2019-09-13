<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKoneksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koneksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_unit_pengelola_jaringan');
            $table->string('nama_kepala_unit');
            $table->string('email');
            $table->string('nomer_hp', 20);
            $table->string('nama_penanggung_jawab_jaringan');
            $table->string('nomor_asn', 20)->nullable();
            $table->string('alamat_ip', 19)->nullable();
            $table->string('nama_penyedia_jasa_internet');
            $table->string('nama_pic');
            $table->string('nomor_hp_pic', 20);
            $table->string('bandwidth_internet', 15);
            $table->string('nama_penyedia_jasa_internet_2')->nullable();
            $table->string('nama_pic_2')->nullable();
            $table->string('nomor_hp_pic_2', 20)->nullable();
            $table->string('bandwidth_internet_2', 15)->nullable();
            $table->string('file_path')->nullable();
            $table->timestamp('verified')->nullable();
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
        Schema::dropIfExists('koneksis');
    }
}
