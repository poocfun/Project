<?php

namespace App\Models;

use App\Models\JenisPekerjaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class JenisPekerjaan extends Model
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
