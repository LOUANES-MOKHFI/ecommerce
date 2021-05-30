<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Details_product extends Model
{
    protected $table = 'details_product';
    protected $fillable = ['product_id','title','image'];

     public function getimageAttribute($val){
      return ($val !== null) ? asset('ceramica/public/assets/images/detailProduct/'.$val) : "";
 }

 public function product(){
      return $this->BelongsTo(Product::class,'product_id');
  }
}
