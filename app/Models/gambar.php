<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambar extends Model
{
    use HasFactory;

    protected $table = 'gambar';

    protected $primarykey = 'id_gambar';

    protected $fillable = [
        'url',
    ];
}
