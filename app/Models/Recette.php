<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    
    use HasFactory;
    
    protected $fillable = [
        'titre',
        'temps_de_dreparation',
        'niveau_difficulte',
        'description',
        'etapes',
    ];
}
