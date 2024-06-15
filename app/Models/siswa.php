<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class siswa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'nisn',
        'nis',
        'nama_siswa',
        'spp_id',
        'kelas_id',
        'alamat',
        'no_telp',
        'gender',
        'tahun_masuk',
        'password',
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id','id');
    }

    public function spp()
    {
        return $this->belongsTo(spp::class, 'spp_id','id');
    }

    public function pembayaran()
    {
        return $this->belongsTo(pembayaran::class, 'nisn','nisn');
    }

    public function gambar()
    {
        return $this->belongsTo(gambar::class, 'nisn','nisn');
    }
}
