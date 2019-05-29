<?php

namespace App;
use App\Recipe;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function recipes(){
        return $this->hasMany(Recipe::class);
    }
}
