<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VirusArticleModel;

class SectionController extends Controller
{
    //
    public function index() {
        $articles =VirusArticleModel::all();
        return view('users.sections')->with('articles', $articles);
    }

    public function detailSection($id) {
        return null;
    }
}
