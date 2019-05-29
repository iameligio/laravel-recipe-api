<?php

namespace App;
use App\Category;
use App\Ingredient;
use App\Instruction;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }

    public function instructions(){
        return $this->hasMany(Instruction::class);
    }


}
