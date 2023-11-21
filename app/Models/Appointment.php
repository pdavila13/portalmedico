<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function appointments()
    {
        //Relations OneToMany
        return $this->hasMany(Appointment::class);
    }

    public function doctors() {
        //Relations ManyToMany
        return $this->belongsToMany(Doctor::class);
    }
}
