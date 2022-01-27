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
        return view('admin.articles.articles')->with('articles', VirusArticleModel::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create')->with('typeViruses', VirusType::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pathName = substr($request->file('file-name')->store("public/virusImage/" . $request->name ), strlen('public/'));
        $pathDetail = substr($request->file('file-detail')->store("public/virusImage/" . $request->name ), strlen('public/'));
        $pathPrecaution = substr($request->file('file-precaution')->store("public/virusImage/" . $request->name ), strlen('public/'));

        VirusArticleModel::create([
            'name' => $request->name,
            'description' => $request->description,
            'year_originated' => $request->year_originated,
            'type_id' => $request->virus_type,
            'img' => $pathName,
            'img_detail' => $pathDetail,
            'img_precaution' => $pathPrecaution
        ]);

        VirusDetailModel::create([
            'location_of_origin' => $request->location_of_origin,
            'detail_description' => $request->detail_description,
            'spread' => $request->spread,
            'number_of_infections' => $request->number_of_infections,
            'number_of_death' => $request->number_of_death,
            'precaution_required' => $request->precaution_required,
        ]);

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
//        $article = VirusArticleModel::find($id);
//        return $article->detail;
        return view('admin.articles.edit')->with('article', VirusArticleModel::find($id));
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
}
