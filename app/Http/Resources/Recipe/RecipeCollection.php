<?php

namespace App\Http\Resources\Recipe;

use Illuminate\Http\Resources\Json\JsonResource;

class RecipeCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        #return parent::toArray($request);


        return [
            'name' => $this->recipe_name,
            'href' =>[
                'image' => $this->image,
                'recipe_url' => $this->publisher_url,
                'details' => route('recipes.show',$this->id)
            ]
        ];
    }
}
