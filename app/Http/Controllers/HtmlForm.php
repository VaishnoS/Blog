<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlForm extends Controller
{
    public function index()
    {
        return view('htmlform.form');
    }
    public function store(Request $request)
    {
        print_r($request->input());
        die();
        $studendata = [];
        if ($request->post()) {
            $studendata[] = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'father_name' => $request->father_name,
                'birthday_date' => $request->birthday_date,
                'email' => $request->email,
                'contact' => $request->contact,
            ];
        }
    }
}
