<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas_administrasi extends Model
{
    protected $table = "petugas_administrasi";
    protected $primaryKey = "id_petugas";
    protected $fillable = [
        'id_petugas', 'nama_petugas', 'alamat_petugas', 'jenis_kelamin_petugas'];
}
