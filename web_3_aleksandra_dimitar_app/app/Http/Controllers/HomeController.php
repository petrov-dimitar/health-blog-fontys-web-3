<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    public function GetHomePage(){
        return view('landingPage');
    }
}
