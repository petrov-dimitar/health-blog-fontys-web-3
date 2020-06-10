<?php
 
use App\Recipe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\User;
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
 
Route::post('register', function (Request $request) {
    // return  response()->json(['error' => 'invalid'], 401);
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'c_password' => 'required|same:password',
    ]);
    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
    }
    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $input['api_token'] = str_random(80);
    $user = User::create($input);
 
    return response()->json(['success' => $user]);
});
 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 
Route::middleware('auth:api')->put('/user/update', function (Request $request) {
    $user = App\User::where('api_token', '=', $request->api_token)->first();
     //return response()->json(['user' => request('name')], 200);
    $user->name = request('name');
    // $user = User::find($user->get()->id);
    $user->save();
 
    return response()->json(['user' => $user], 200);
});
 
Route::middleware('auth:api')->put('/user/delete', function (Request $request) {
    $user = App\User::where('api_token', '=', $request->api_token)->first();
     //return response()->json(['user' => request('name')], 200);
    //$user->name = request('name');
    // $user = User::find($user->get()->id);
    $user->delete();
 
    return response()->json(['user deleted' => $user], 200);
});
 

Route::middleware('auth:api')->get('/recipes/user', function (Request $request) {
 
    $user = App\User::where('api_token', '=', $request->api_token);
    // return response()->json(['user' => $user], 200);
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
 
Route::get('users', function () {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return User::all();
});
 
Route::get('recipes', function () {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Recipe::all();
});