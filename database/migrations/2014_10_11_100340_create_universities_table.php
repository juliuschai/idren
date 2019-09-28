<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kode_pt');
            $table->string('logo')->nullable();
            $table->string('instansi', 100);
            $table->integer('views')->default(0);
            $table->string('provinsi', 30)->nullable();
            $table->string('kategori', 13)->nullable();
            $table->string('status')->nullable();
            //ALTER TABLE `universities` DROP `created_at`, DROP `updated_at`;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universities');
    }
}
