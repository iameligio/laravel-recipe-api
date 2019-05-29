<?php

namespace App\Http\Resources\Recipe;

use Illuminate\Http\Resources\Json\JsonResource;

class RecipeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $ingredient =[];
        foreach($this->ingredient as $sangkap) {
            $ingredient[] = $sangkap->ingredient;
        }

        $instruction =[];
        foreach($this->instruction as $paraan) {
            $instruction[] = $paraan->instruction;
        }

        return [
            'name' => $this->recipe_name,
            'ingredients' => $ingredient,
            'instructions' => $instruction,
            'href' => [
                'image' => $this->image,
                'recipe_url' => $this->publisher_url,
                'source' => $this->source_url
            ]



        ];
    }
}
