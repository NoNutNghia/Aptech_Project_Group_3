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
        $virusTypes = $this->getType();
        $slider = $this->getSlider();
        $articles = VirusArticleModel::all();
        $yearWishes = $this->getYear();
        return view('users.sections')->with('articles', $articles)
                                          ->with('virusTypes', $virusTypes)
                                          ->with('year_wishes', $yearWishes)
                                          ->with('sliders', $slider);
//        return $articles;

    }

    public function detailSection($id) {
        $article = VirusArticleModel::find($id);
        $virusTypes = $this->getType();
        $slider = $this->getSlider();
        $yearWishes = $this->getYear();
        return view('users.detail')->with('article', $article)
                                        ->with('sliders', $slider)
                                        ->with('year_wishes', $yearWishes)
                                        ->with('virusTypes', $virusTypes);


    }

    public function getSlider() {
        return DB::table('image_sliders')->select('img')->get();
    }

    public function getYear() {
        $articles = VirusArticleModel::all();
        return $articles->unique('year_originated')->map(function ($yearWish, $key) {
                    return $yearWish->year_originated;
                })->sortByDesc(function ($yearWish, $key){
                    return $yearWish;
                })->values()->all();
    }

    public function getType() {
        return DB::table('virus_types')->orderBy('type_virus')->get();
    }

}
