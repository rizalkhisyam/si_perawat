<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengukuran extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nip', 'jenjang_karir', 'ruangan', 'id_perawat', 'id_user', 'id_ruangan'];
}
