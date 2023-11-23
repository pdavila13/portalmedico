<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['name','middleName','lastName','email'];

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
