<?php

namespace App\Http\Controllers;
// php artisan make:controller RecipeController --resource --model=Recipe -> resource creates CRUD from the specified model

use App\Recipe;
use Illuminate\Http\Request;
use App;
use Image;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $recipe->user_id = $request->user()->id;
        $image_name = $request->file('photo_name');

        // if( $request->file('photo_name') {
        //     $path = Input::file('import_file')->getRealPath();
        // } 
        // else  {
        //     return back()->withErrors("");
        // }

        $ImageUpload = Image::make($request->file('photo_name')->getRealPath());
        $originalPath = 'root';
        $ImageUpload->resize(500, 500);
        $ImageUpload->save($originalPath . time() . $image_name->getClientOriginalName());



        $recipe->photo_name = time() . $image_name->getClientOriginalName();


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

        $image_name = $request->file('photo_name');


        $ImageUpload = Image::make($request->file('photo_name')->getRealPath());
        $originalPath = 'root';
        $ImageUpload->resize(500, 500);
        $ImageUpload->save($originalPath . time() . $image_name->getClientOriginalName());

        $recipe->photo_name = time() . $image_name->getClientOriginalName();

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
