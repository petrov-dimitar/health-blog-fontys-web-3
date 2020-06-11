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

//Route::get('/', 'HomeController@GetHomePage');

//in the recipes page, we use the already created RecipeController and the method index to show all recipes
Route::get('/recipes', 'RecipeController@index')->middleware('auth');

//{} those shows that the specific value is an input and should be past to the controller


Route::get('info', 'HomeController@getInfoPage');
Auth::routes();

Route::get('/', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::get('/user/profile', 'UserController@getProfile')->middleware('auth');;



Route::get('/user/profile/edit', 'UserController@getProfileEdit')->middleware('auth');

Route::put('/user/profile/edit/{id}', 'UserController@updateProfile')->middleware('auth');

Route::get('/recipes/{id}', 'RecipeController@show')->middleware('auth');

Route::get('/user/recipes/create', 'RecipeController@create')->middleware('auth');

Route::post('/user/createRecipe', 'RecipeController@store')->middleware('auth');

Route::get('/user/recipes/delete/{id}', 'RecipeController@destroy')->middleware('auth');

Route::get('/user/recipes/edit/{id}', 'RecipeController@edit')->middleware('auth');

Route::put('/user/recipes/update/{id}', 'RecipeController@Update')->middleware('auth');

//Photos
Route::get('image', 'ImageController@index');
Route::post('save-image', 'ImageController@save');

Route::get('users/export/', 'HomeController@export')->middleware('auth');;


Route::get('/adminDemo', 'UserController@loginAsAdminDemo');
