<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'alamat',
        'jenis_pinjaman',
        'total_pinjaman',
    ];
}
