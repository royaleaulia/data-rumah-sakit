<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perawat extends Model
{
    protected $table = "perawat";
    protected $primaryKey = "id_perawat";
    protected $fillable = [
        'id_perawat', 'nama_perawat', 'jenis_kelamin'];
}
