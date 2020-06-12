<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use App;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Image;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * API Register
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function registerAPI(Request $request)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        $input     = $request->only('name', 'email', 'password');
        //$validator = Validator::make($input, $rules);

        //if ($validator->fails()) {
        //    return response()->json(['success' => false, 'error' => $validator->messages()]);
        //}
        $name = $request->name;
        $email    = $request->email;
        $password = $request->password;
        $user     = User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password), 'api_token' => str_random(80)]);

        return response()->json(['success' => $user, //'error' => $validator->messages()
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return User::all();
    }

    public function getProfile()
    {
        return view('profilePage', ['image' => Photo::latest()->first(['photo_name'])]);
    }

    public function getProfileEdit()
    {
        return view('editProfile');
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);

        $image_name = $request->file('photo_name');

        $waterMarkUrl = public_path("watermark.png");

        $ImageUpload = Image::make($request->file('photo_name')->getRealPath());
        $originalPath = 'root';
        $ImageUpload->resize(500, 500);

        $ImageUpload->insert($waterMarkUrl, 'bottom-left', 90, 10);
        $ImageUpload->save($originalPath . time() . $image_name->getClientOriginalName());


        $user->photo_name = time() . $image_name->getClientOriginalName();


        $user->name = request('name');

        $user->save();

        return redirect(url('user/profile'));
    }

    public function loginAsAdminDemo()
    {


        Auth::loginUsingId(4);
        return redirect(url('/'));
    }
}
