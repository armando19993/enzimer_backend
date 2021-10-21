<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;

    public function carreras()
    {
        return $this->hasMany(Carreras::class, 'id_area', 'id');
    }
}
