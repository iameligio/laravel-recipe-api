<?php

namespace App;
use App\Recipe;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
     public function recipes(){
        return $this->belongsTo(Recipe::class);
    }
}
