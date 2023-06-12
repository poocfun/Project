<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

}
