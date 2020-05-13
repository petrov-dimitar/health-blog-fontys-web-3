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

Route::get('/', 'HomeController@GetHomePage');

//in the recipes page, we use the already created RecipeController and the method index to show all recipes
Route::get('/recipes', 'RecipeController@index');

//{} those shows that the specific value is an input and should be past to the controller
Route::get('/recipes/{id}', 'RecipeController@show');
