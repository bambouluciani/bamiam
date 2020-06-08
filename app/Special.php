<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    protected $fillable = array("nom", "image", "description", "price", "genre");
}
