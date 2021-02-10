<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('id_pegawai');
            $table->string('nama_pegawai', 100);
            $table->string('tlp_pegawai', 50);
            $table->string('email_pegawai', 100)->nullable();
            $table->integer('pin_pegawai');
            $table->string('toko_pegawai', 100);
            $table->string('jabatan_pegawai', 100)->nullable();
            $table->integer('level_pegawai');
            $table->string('foto_pegawai', 200)->nullable();
            $table->timestamp('buat_pegawai')->useCurrent();
            $table->timestamp('ubah_pegawai')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
