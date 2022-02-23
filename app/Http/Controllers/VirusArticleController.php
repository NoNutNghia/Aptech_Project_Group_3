<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VirusArticleModel;
use App\Models\VirusDetailModel;

use App\Models\VirusType;
use Illuminate\Support\Facades\DB;

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
        $pathName = substr($request->file('file-name')->store("public/" . $request->name ), strlen('public/'));
        $pathDetail = substr($request->file('file-detail')->store("public/" . $request->name ), strlen('public/'));
        $pathPrecaution = substr($request->file('file-precaution')->store("public/" . $request->name ), strlen('public/'));
        $virusType = $request->virus_type;
        if($request->new_virus_type != null) {
            if(!DB::table('virus_types')->where('type_virus', '=', $request->new_virus_type)->exists()) {
                VirusType::insert([
                    'type_virus' => $request->new_virus_type
                ]);
                $virusType = DB::table('virus_types')->selectRaw('count(*) as count_type')->get()->first()->count_type;
            }
        }

        VirusArticleModel::create([
            'name' => $request->name,
            'description' => $request->description,
            'year_originated' => $request->year_originated,
            'type_id' => $virusType,
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

        return redirect('/admin/articles');
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
        return view('admin.articles.info')->with('article', $article);
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
        $typeViruses = VirusType::all();
        return view('admin.articles.edit')->with('article', VirusArticleModel::find($id))
                                               ->with('type_viruses', $typeViruses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VirusArticleModel $article)
    {
        $article->name = $request->name;
        $article->type_id = $request->type_id;
        $article->year_originated = $request->year_originated;
        $article->description = $request->description;

        if($request->hasFile('img')) {
            $pathName = substr($request->file('img')->store("public/UpdateImage/" . $request->name), strlen('public/'));
            $article->img = $pathName;
        }

        if($request->hasFile('img_detail')) {
            $pathName = substr($request->file('img_detail')->store("public/UpdateImage/" . $request->name ), strlen('public/'));
            $article->img_detail = $pathName;
        }

        if($request->hasFile('img_precaution')) {
            $pathName = substr($request->file('img_precaution')->store("public/UpdateImage/" . $request->name ), strlen('public/'));
            $article->img_precaution = $pathName;
        }

        $article->detail->location_of_origin = $request->location_of_origin;
        $article->detail->spread = $request->spread;
        $article->detail->detail_description = $request->detail_description;
        $article->detail->number_of_infections = $request->number_of_infections;
        $article->detail->number_of_death = $request->number_of_death;
        $article->detail->precaution_required = $request->precaution_required;


        $article->update();

        return redirect()->route('articles.show', $article->id);

//        return redirect('/admin/articles');

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
        return redirect('/admin/articles');
    }
}
