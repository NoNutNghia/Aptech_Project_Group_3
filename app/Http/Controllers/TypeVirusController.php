<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeVirusController extends Controller
{
    //

    public function store(Request $request) {
        return redirect()->back()->withInput();
    }
}
