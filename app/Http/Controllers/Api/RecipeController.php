<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RecipeRequest;
use App\Http\Resources\Recipe\RecipeResource;
use App\Http\Resources\Recipe\RecipeCollection;
use App\Recipe;
use App\Ingredient;
use App\Instruction;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecipeController extends Controller
{
    public function __construct(){

        $this->middleware('auth:api')->except('index','show');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::paginate(20);

        //return $recipes;

        return RecipeCollection::collection($recipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecipeRequest $request)
    {


        $recipe = Recipe::create([

            'recipe_name'   => $request->recipe_name,
            'category_id'   => $request->category_id,
            'image'         => $request->image,
            'publisher'     => $request->publisher,
            'publisher_url' => $request->publisher_url,
            'source_url'    => $request->source_url,
            'recipe_slug'   => $request->recipe_slug,


        ]);


        if(is_array($request->instructions)) {
            foreach($request->instructions as $instruction) {
            Instruction::create([
                'instruction' => $instruction,
                'recipe_id' => $recipe->id
            ]);
        }
        }

        if(is_array($request->ingredients)){
            foreach($request->ingredients as $ingredient) {
            Ingredient::create([
                'ingredient' => $ingredient,
                'recipe_id' => $recipe->id
            ]);
        }
        }


        return response([
            'data' => new RecipeResource($recipe)

        ],Response::HTTP_CREATED);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
       $recipe['ingredient'] = $recipe->ingredients;
       $recipe['instruction'] = $recipe->instructions;

       return new RecipeResource($recipe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
