<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningBlade extends Controller
{
    public function index()
    {
        return view('LearningBlade.user', ['user' => ['Vaishno', 'Prakash', 'Saxena']]);
    }
}
