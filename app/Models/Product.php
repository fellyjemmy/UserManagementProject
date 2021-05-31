<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;





class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
    'product_name',
    'category_id',
    'quantity_available',
    'products_left',
    'product_entrance_date',
    'product_finishup_date',

    ];

    public function category() {
      return $this->belongsTo('App\Models\Category', 'category_id');
    }



    protected $dates = ['deleted_at'];


       //  public function date()
       // {
       //   $todayDate = Carbon::now()->format('Y-m-d');
       //    // dd($todayDate);
       // }
       public function date()
       {

       $calendar = Product::orderBy('products.created_at','DESC')
              ->get()->where('product_entrance_date', '<=', Carbon::today()->toDateString());
            }


}
