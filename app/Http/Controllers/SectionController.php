<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use Illuminate\Http\Request;

use App\Models\VirusArticleModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class SectionController extends Controller
{
    //
    public function index() {

        $virusTypes = $this->getType();
        $slider = $this->getSlider();
        $yearWishes = $this->getYear();

        return view('users.sections')->with('articles', VirusArticleModel::all())
                                          ->with('virusTypes', $virusTypes)
                                          ->with('year_wishes', $yearWishes)
                                          ->with('sliders', $slider);
//        return $articles;

    }

    public function detailSection($id) {
        $article = VirusArticleModel::find($id);
        $virusTypes = $this->getType();
        $slider = $this->getSlider();
        $barChart = $this->getBarChart($article);
        $yearWishes = $this->getYear();
        return view('users.detail')->with('article', $article)
                                        ->with('sliders', $slider)
                                        ->with('year_wishes', $yearWishes)
                                        ->with('virusTypes', $virusTypes)
                                        ->with('chart', $barChart);
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

    public function getSection($tag) {
        if(is_numeric($tag)) {
            $articles = DB::table('virus_article_models')->where('year_originated', '=', $tag)->get();
        } else {
            $param = DB::table('virus_types')->where('type_virus', '=', $tag)->get('id')->get(0)->id;
            $articles = DB::table('virus_article_models')->where('type_id', '=', $param)->get();
        }
        $virusTypes = $this->getType();
        $yearWishes = $this->getYear();
        return view('users.tag')->with('articles', $articles)
                                    ->with('year_wishes', $yearWishes)
                                    ->with('virusTypes', $virusTypes);

    }

    public function getBarChart($article) {
        $borderColors = [
            "rgba(255,212,38, 1.0)",
            "rgba(255,42,0, 1.0)",
        ];
        $fillColors = [
            "rgba(255,212,38, 0.3)",
            "rgba(255,42,0, 0.3)",
        ];
        $usersChart = new UserChart;
        $usersChart->labels(['Number of infections', 'Number of deaths']);
        $usersChart->dataset('Amount of people', 'bar', [$article->detail->number_of_infections, $article->detail->number_of_death])
            ->color($borderColors)
            ->backgroundcolor($fillColors);
        return $usersChart;
    }

}
