<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\Redirect;

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

    public function updateProfile($id)
    {
        $user = User::find($id);

        $user->name = request('name');

        $user->save();

        return redirect('/user/profile');
    }
}
