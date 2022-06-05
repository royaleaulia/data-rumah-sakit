<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->Int('id_pasien', 11);
            $table->string('nama_pasien', 100);
            $table->date('tanggal_lahir_pasien');
            $table->string('alamat_pasien', 500);
            $table->string('jenis_kelamin_pasien', 20);
            $table->string('no_telp_pasien', 20);
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
        Schema::dropIfExists('pasiens');
    }
};
