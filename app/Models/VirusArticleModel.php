<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VirusArticleModel extends Model
{
    protected $fillable =[
      'name',
      'img',
      'description'
    ];
}
