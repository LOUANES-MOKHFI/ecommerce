<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{

   protected $fillable = ['product_id','attribute_id','name','category'];


   public function OptionAttribute(){

   }

   public function product(){
      return $this->belongsTo(Product::class,'product_id')->select('name');
   }
   public function attribute(){
      return $this->belongsTo(Attributes::class,'attribute_id');
   }

}
