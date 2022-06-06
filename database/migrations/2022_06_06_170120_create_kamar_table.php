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
        Schema::create('kamar', function (Blueprint $table) {
            $table->id();
            $table-> string("nama_kamar", 50);
<<<<<<< HEAD:database/migrations/2022_06_06_162310_create_kamar_table.php
            $table-> integer("nomor_kamar");
=======
            $table-> string("nomor_kamar", 11);
>>>>>>> 00ae9fe9f18969baa80fd00c456f0a9680332ea1:database/migrations/2022_06_06_170120_create_kamar_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamar');
    }
};
