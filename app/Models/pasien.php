<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = [
        'id_pasien', 'nama_pasien', 'tanggal_lahir_pasien', 'alamat_pasien', 'jenis_kelamin_pasien', 'no_telp_pasien'];
}
