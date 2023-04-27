<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nev',
        'kategoria_id',
        'kep_eleresi_ut',
        'leiras'
    ];

}
