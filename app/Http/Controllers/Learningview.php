<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Learningview extends Controller
{
    public function index()
    {
        return view('learnview.viewpass');
    }
    public function loadview($user)
    {
        return view('learnview.viewpass',  ['name' => $user]);
        //return view('learnview.viewpass')->with(['name', $user]);
    }
}
