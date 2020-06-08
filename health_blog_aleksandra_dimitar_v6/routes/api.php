<?php

use App\Recipe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/recipes', function (Request $request) {

    $user = App\User::where('api_token', '=', $request->api_token);
    if ($user) {
        if ($user->firstOrFail()->Recipes()->count() > 0) {
            return response()->json(['user' => $user->firstOrFail()->Recipes()->get()], 200);
        } else {
            return  response()->json(['error' => 'No Recipes Yet'], 200);
        };
    } else {
        return  response()->json(['error' => 'invalid'], 500);
    }
});

Route::middleware('auth:api')->post('/user/recipes/{id}', 'RecipeController@Update');

Route::post('login', function (Request $request) {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {

        return response()->json(['user' => Auth::user()], 200);
    } else {
        return  response()->json(['error' => 'invalid'], 401);
    };
});

Route::post('/register', 'UserController@registerAPI'); 

Route::get('users', function () {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return User::all();
});
