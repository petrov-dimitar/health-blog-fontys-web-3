<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/child', function () {
    return view('child');
});

Route::get('/recipes', function () {
    return view('recipes', [
        'recipes' => App\Recipe::latest()->get()
    ]);
});

Route::get('/recipes/{id}', function ($id) {
    return view('recipeInfo', [
        'recipe' => App\Recipe::find($id)
    ]);
});
