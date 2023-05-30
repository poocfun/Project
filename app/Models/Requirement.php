<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;


    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }
}
