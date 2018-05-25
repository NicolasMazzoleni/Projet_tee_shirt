<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tshirt extends Model
{
    //Préciser les champs que l'on a le droit de modifier
    protected $fillable = ['sexe', 'largeurImpression', 'hauteurImpression', 'origineX', 'origineY'];
}
