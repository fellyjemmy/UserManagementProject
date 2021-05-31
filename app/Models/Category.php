<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
      'category_name',
        'category_description',


    ];

    public function product() {
      return $this->hasMany('App\Models\Product','category_id');
   }
    protected $dates = ['deleted_at'];

}
