<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('nisn')->primary();
            $table->integer('nis');
            $table->string('nama_siswa','255');
            $table->foreignId('kelas_id');
            $table->foreignId('spp_id');
            $table->text('alamat');
            $table->string('no_telp','15');
            $table->enum('gender',['Laki-laki','Perempuan']);
            $table->integer('tahun_masuk');
            $table->string('password');
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
