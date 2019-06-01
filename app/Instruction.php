<?php

namespace App;
use App\Recipe;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    protected $table = 'Instructions';
    protected $fillable = [
        'recipe_id', 'instruction'
    ];

    public $timestamps = false;

   /*
   public function recipes(){
        return $this->belongsTo(Recipe::class);
    }
    */
}
