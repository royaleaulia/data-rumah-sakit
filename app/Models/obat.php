<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $table = "obat";
    protected $primaryKey = "id_obat";
    protected $fillable = [
        'id_obat', 'nama_obat', 'jenis_obat', 'fungsi_obat'];
}
