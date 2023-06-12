<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KodeEtik extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function sub_kode_etiks(){
        return $this->hasMany(SubKodeEtik::class);
    }
}
