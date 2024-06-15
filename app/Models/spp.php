<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;
    protected $fillable = [
        'nominal',
        'tahun',
        'semester',
        'keterangan'

    ];

    public function siswa()
    {
        return $this->hasMany(siswa::class, 'spp_id','id');
    }

    public function pembayaran()
    {
        return $this->hasMany(pembayaran::class, 'spp_id','id');
    }
}
