<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        // 'nama_siswa', 
        'spp_id',
        'user_id',
        'tgl_bayar',
        'bln_bayar',
        'thn_bayar',
        'jumlah_bayar',
        'status',
    ];

    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'nisn','nisn');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function spp()
    {
        return $this->belongsTo(spp::class, 'spp_id','id');
    }
}
