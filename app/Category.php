<?php

namespace App;

use App\Dish;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array("name");

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
