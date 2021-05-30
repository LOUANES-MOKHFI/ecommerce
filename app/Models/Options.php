<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{

   protected $fillable = ['category_id','product_id','attribute_id','name','category','img_couleur','img_format','img_finition','img_salle'];


   public function OptionAttribute(){

   }
  
   public function getImgCouleurAttribute($val){
      return ($val !== null) ? asset('/ceramica/public/assets/images/couleur/'.$val) : "";
 }

 public function getImgSalleAttribute($val){
      return ($val !== null) ? asset('/ceramica/public/assets/images/salledebain/'.$val) : "";
 }

    public function getImgFormatAttribute($val){
         return ($val !== null) ? asset('/ceramica/public/assets/images/format/'.$val) : "";
    }

    public function getImgFinitionAttribute($val){
         return ($val !== null) ? asset('/ceramica/public/assets/images/finition/'.$val) : "";
    }


   public function product(){
      return $this->belongsTo(Product::class,'product_id')->select('name');
   }
   public function attribute(){
      return $this->belongsTo(Attributes::class,'attribute_id');
   }
   public function details(){
    return $this->hasMany(DetailOptions::class,'option_id');
   }
   

}
