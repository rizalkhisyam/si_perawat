<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKodeEtik extends Model
{
    use HasFactory;

    protected $fillable = ['kode_etik_id', 'aktivitas'];

    public function kode_etiks(){
        return $this->belongsTo(KodeEtik::class);
    }
}
