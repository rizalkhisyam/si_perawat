<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKodeEtik extends Model
{
    use HasFactory;

    public function kode_etiks(){
        return $this->belongsTo(KodeEtik::class);
    }
}
