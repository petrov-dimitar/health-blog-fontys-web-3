<?php

namespace App\Http\Controllers;
// php artisan make:controller RecipeController --resource --model=Recipe -> resource creates CRUD from the specified model

use App\Recipe;
use Illuminate\Http\Request;
use App;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recipes', [
            'recipes' => App\User::find(auth()->user()->id)->Recipes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createRecipe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipe();

        $recipe->recipe_name = $request->recipe_name;
        $recipe->description = $request->description;
        $recipe->user_id = auth()->user()->id;

        $recipe->save();

        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('recipeInfo', [
            'recipe' => App\Recipe::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = App\Recipe::find($id);

        return view('editRecipe', ['recipe' => $recipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recipe = App\Recipe::find($id);

        $recipe->recipe_name = request('recipe_name');
        $recipe->description = request('description');

        $recipe->save();

        return view('recipeInfo', [
            'recipe' => App\Recipe::find($id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $recipe = App\Recipe::find($id);
        $recipe->delete();

        return redirect('/recipes');
    }
}
