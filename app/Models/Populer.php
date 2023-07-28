<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Populer extends Model
{
    use HasFactory;

    protected $table="populers";
    protected $fillable= [
        'namapt',
        'kebutuhan',
        'deskripsi',
        'lokasi',
        'image',
    ];
}
