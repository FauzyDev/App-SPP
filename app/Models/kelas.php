<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'tingkatan',
        'kompetensi_keahlian'
    ];
    
    public function siswa()
    {
        return $this->hasMany(siswa::class, 'kelas_id','id');
    }
}
