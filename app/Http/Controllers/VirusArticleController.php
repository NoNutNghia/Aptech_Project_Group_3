<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VirusArticleModel;
use App\Models\VirusDetailModel;

use App\Models\VirusType;

class VirusArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = VirusArticleModel::paginate(5);
        return view('admin.articles.articles')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeViruses = VirusType::all();
        return view('admin.articles.create')->with('typeViruses', $typeViruses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageUrl = $this->storeImage($request);
        $article = new VirusArticleModel;
        $article->name = $request->name;
        $article->description = $request->description;
        $article->year_originated = $request->year_originated;
        $article->img = $imageUrl;
        $article->type_id = 1;

        $articleDetail = new VirusDetailModel;
        $articleDetail->location_of_origin = $request->location_of_origin;
        $articleDetail->spread = $request->spread;
        $articleDetail->number_of_infections = $request->number_of_infections;
        $articleDetail->number_of_death = $request->number_of_death;
        $articleDetail->precaution_required = $request->precaution_required;


        $article->save();
        $articleDetail->save();

        return $this->index();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = VirusArticleModel::find($id);
        return $article;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = VirusArticleModel::find($id);
//        return $article->detail;
        return view('admin.articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,VirusArticleModel $article)
    {
        $article->update($request->all());
        $article->detail->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = VirusArticleModel::find($id);
        $article->delete();
        $article->detail->delete();
        return $this->index();
    }

    // Name image and get path URL
    protected function storeImage(Request $request) {
        $path = $request->file('file')->store('public/virusImage');
        return substr($path, strlen('public/'));
    }
}
