<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function patients() {
        //Relations ManyToMany
        return $this->belongsToMany(Patient::class);
    }
}
