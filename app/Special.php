<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    protected $fillable = array("name", "image", "description", "price", "genre");

    public function getImageAttribute($image)
    {
        return asset($image);
    }
}
