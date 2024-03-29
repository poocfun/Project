<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamar extends Model
{
    use HasFactory;

    protected  $fillable = [ 'pengalaman', 'pendidikan', 'dokumen', 'lamar_id', 'user_id'];

    public function lamar()
    {
        return $this->hasMany(Lamar::class, 'lamar_id', 'user_id');
    }
}
