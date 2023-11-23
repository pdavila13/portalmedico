<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory, softDeletes;

    public function users() {
        $this->belongsToMany(User::class);
    }
}
