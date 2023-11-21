<?php

namespace App\Models\External;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalModel extends Model
{
    use HasFactory;

    protected $connection = 'misegundabd';
    protected $table = "Mi_Agenda";
    protected $primarykey = ['year','month','day'];
    protected $incrementing = false;
}
