<?php

namespace App;
use App\Recipe;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'Ingredients';
    protected $fillable = [
        'recipe_id', 'ingredient'
    ];
    public $timestamps = false;

    /*
    public function recipes(){
        return $this->belongsTo(Recipe::class);
    }
*/
}
