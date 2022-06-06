<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = "dokter";
    protected $primaryKey = "id_dokter";
    protected $fillable = [
        'id_dokter', 'nomor_identitas_dokter', 'nama_dokter', 'jenis_kelamin_dokter', 'spesialis'];
}
