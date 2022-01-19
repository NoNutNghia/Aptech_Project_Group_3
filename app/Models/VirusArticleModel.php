<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VirusArticleModel extends Model
{
    protected $fillable = [
        'id',
        'name',
        'img',
        'description',
        'year_originated',

    ];

    public function detail() {
        return $this->hasOne('App\Models\VirusDetailModel', 'id');
    }

    public function type() {
        return $this->belongsTo('App\Models\VirusType');
    }


}
