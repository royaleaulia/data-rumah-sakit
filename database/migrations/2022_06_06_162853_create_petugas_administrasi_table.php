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
        Schema::create('petugas_administrasi', function (Blueprint $table) {
            $table-> id();
            $table-> string("nama_petugas", 255);
            $table-> string("alamat_petugas", 255);
            $table-> string("jenis_kelamin_petugas", 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas_administrasi');
    }
};
