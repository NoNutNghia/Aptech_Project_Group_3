<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VirusArticleModel extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type_id',
        'img',
        'img_detail',
        'img_precaution',
        'year_originated',
    ];

    public function detail() {
        return $this->hasOne('App\Models\VirusDetailModel', 'id');
    }

    public function type() {
        return $this->belongsTo('App\Models\VirusType');
    }

}
