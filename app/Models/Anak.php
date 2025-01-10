<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'nama_orangtua',
        'alamat',
    ];
}
