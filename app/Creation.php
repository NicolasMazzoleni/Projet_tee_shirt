<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    //Préciser les champs que l'on a le droit de modifier
    protected $fillable = ['tshirt_id', 'logo_id', 'user_id'];
}
