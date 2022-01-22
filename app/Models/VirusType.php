<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VirusType extends Model
{
    //
    protected $fillable = [
        'type_virus'
    ];

    public function articles() {
        return $this->hasMany('App\Models\VirusArticleModel', 'type_id');
    }
}
