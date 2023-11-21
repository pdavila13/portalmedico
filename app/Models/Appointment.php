<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function patients() {
        //Relations ManyToMany
        return $this->belongsTo(Patient::class);
    }
}
