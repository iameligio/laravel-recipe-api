<?php

namespace App;
use App\Recipe;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

    public function recipes(){
        return $this->belongsTo(Recipe::class);
    }

}
