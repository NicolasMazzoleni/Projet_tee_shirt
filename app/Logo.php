<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    //Préciser les champs que l'on a le droit de modifier
    protected $fillable = ['nom', 'largeur', 'hauteur'];
}
