<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VirusArticleModel;
use App\Models\VirusType;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    //
    public function index() {
        $virusTypes = DB::table('virus_types')->orderBy('type_virus')->get();
        $articles = VirusArticleModel::all();
        $yearWishes = $articles->unique('year_originated')->map(function ($yearWish, $key) {
            return $yearWish->year_originated;
        })->sortByDesc(function ($yearWish, $key){
            return $yearWish;
        })->values()->all();
        return view('users.sections')->with('articles', $articles)
                                          ->with('virusTypes', $virusTypes)
                                          ->with('year_wishes', $yearWishes);
    }

    public function detailSection($id) {
        return null;
    }


}
