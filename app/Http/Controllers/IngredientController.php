<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ingredient;
use App\Http\Resources\Ingredient as IngredientResource;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::orderBy('name', 'ASC')->get();

        return IngredientResource::collection($ingredients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required'
        ]);

        $ingredient = Ingredient::create($validation);

        return new IngredientResource($ingredient);
    }

    public function update($id, Request $request)
    {
      $ingredient = Ingredient::find($id);

      $ingredient->update($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingredient = Ingredient::findOrFail($id);

        return new IngredientResource($ingredient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingredient = Ingredient::findOrFail($id);

       if ($ingredient->delete()) {
            return new IngredientResource($ingredient);
       }
    }
}
