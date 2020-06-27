<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function newProfilePost(){
        return view('profile_post');
    }

    public function newPagePost(){
        return view('page_post');
    }
}
