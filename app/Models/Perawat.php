<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    use HasFactory;

    protected $fillable = ["id", "nama", "usia", "jenis_kelamin", "status_pendidikan", "lama_bekerja", "status", "jenjang_karir"];
}
