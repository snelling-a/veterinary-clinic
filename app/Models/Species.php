<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;

    public function doctor()
    {
        return $this->belongsToMany(DoctorSpecies::class);
    }
}
