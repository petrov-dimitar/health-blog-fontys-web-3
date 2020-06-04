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
Route::get('/recipes', 'RecipeController@index');

//{} those shows that the specific value is an input and should be past to the controller


Route::get('info', 'HomeController@getInfoPage');
Auth::routes();

Route::get('/', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::get('/user/profile', 'UserController@getProfile');



Route::get('/user/profile/edit', 'UserController@getProfileEdit');

Route::put('/user/profile/edit/{id}', 'UserController@updateProfile');

Route::get('/recipes/{id}', 'RecipeController@show');

Route::get('/user/recipes/create', 'RecipeController@create');

Route::post('/user/createRecipe', 'RecipeController@store');

Route::get('/user/recipes/delete/{id}', 'RecipeController@destroy');

Route::get('/user/recipes/edit/{id}', 'RecipeController@edit');

Route::put('/user/recipes/update/{id}', 'RecipeController@Update');

//Photos
Route::get('image', 'ImageController@index');
Route::post('save-image', 'ImageController@save');

Route::get('users/export/', 'HomeController@export');


Route::get('/adminDemo', 'UserController@loginAsAdminDemo');
