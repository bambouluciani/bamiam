<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = array("category_id", "name", "description", "price", "genre");

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
