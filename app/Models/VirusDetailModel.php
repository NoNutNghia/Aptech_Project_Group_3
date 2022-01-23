<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VirusDetailModel extends Model
{
    protected $fillable =[
        'id',
        'location_of_origin',
        'detail_description',
        'spread',
        'number_of_infections',
        'number_of_deaths',
        'precaution_required'
    ];

    public function article() {
        return $this->hasOne('App\Models\VirusArticleModel');
    }
}
