<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',  'price', 'description','category_id','image1','image2','image3'
   ];
   public function category(){


    return $this->belongsto(category::class,'category_id');
}






}
