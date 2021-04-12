<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = [
        'titre', 'auteur', 'pays', 'type', 'parution',
    ];
}
