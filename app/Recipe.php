<?php

namespace App;
use App\Category;
use App\Ingredient;
use App\Instruction;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    protected $fillable = [
        'recipe_name','category_id','image','publisher','publisher_url','source_url','recipe_slug'
    ];

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
