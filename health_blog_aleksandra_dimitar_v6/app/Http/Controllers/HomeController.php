<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Image;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landingPage');
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

        //---

        // $img = Image::make($request->file('photo_name')->getRealPath());
        // $files = $request->file('photo_name');
        $image_name = $request->file('photo_name');

        // for save original image
        $ImageUpload = Image::make($request->file('photo_name')->getRealPath());
        $originalPath = 'root';
        $ImageUpload->save($originalPath . time() . $image_name->getClientOriginalName());

        // // for save thumnail image
        // $thumbnailPath = 'root';
        // $ImageUpload->resize(250, 125);
        // $ImageUpload = $ImageUpload->save($thumbnailPath . time() . $files->getClientOriginalName());

        // $photo = new Photo();
        // $photo->photo_name = time() . $files->getClientOriginalName();
        // $photo->save();

        $user->photo_name = time() . $image_name->getClientOriginalName();



        //---


        $user->name = request('name');

        $user->save();

        return redirect(url('user/profile'));
    }
}
