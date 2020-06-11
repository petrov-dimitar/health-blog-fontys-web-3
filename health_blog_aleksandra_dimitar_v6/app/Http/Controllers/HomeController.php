<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use App;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\Gate;
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
        // $this->middleware('auth');
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





    public function export()
    {
        if (Gate::allows('export_users')) {
            // The current user can edit settings
            return Excel::download(new UsersExport, 'users.xlsx');
        } else {
            return view('info', ['message' => "You need to login as an admin first"]);
        }
    }

    public function getInfoPage()
    {
        return view('info');
    }
}
