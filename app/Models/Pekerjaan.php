<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;

    public function requirement()
    {
        return $this->hasMany(Requirement::class, 'pekerjaan_id', 'id');
    }
    public function benefit()
    {
        return $this->hasMany(Benefit::class, 'pekerjaan_id', 'id');
    }
}
