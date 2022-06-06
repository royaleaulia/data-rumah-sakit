<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table = "kamar";
    protected $primaryKey = "id_kamar";
    protected $fillable = [
        'id_kamar', 'nama_kamar', 'nomor_kamar'];
}