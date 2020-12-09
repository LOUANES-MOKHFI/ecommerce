<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  
  use Translatable,softDeletes;
 
   protected $fillable = ['brand_id','slug','price','special_price','special_price_type'
   ,'special_price_start','special_price_end','selling_price','manage_stock','qty','in_stock','is_active'];
   
   protected $with = ['translations'];
  
   protected $translatedAttributes = ['name','description','short_decription'];
/**
   * the relations to eager on very query.
   *
   * @var array
   */
   protected $hidden = ['translations'];

    /**
   * the attributes that should be cast to native types.
   *
   * @var array
   */
   protected $casts = [
       'manage_stock' => 'boolean',
       'is_stock' => 'boolean',
       'is_active' => 'boolean'
   ];

   protected $date = [
    'special_price_start' => 'boolean',
    'special_price_end' => 'boolean',
    'start_date' => 'boolean',
    'end_date' => 'boolean',
    'deleted_at' => 'boolean'
    ];

 
   public function getActive(){
      return $this->is_active == 1 ? __('admin/category.active') :  __('admin/category.notactive');
   }

   public function getphotoAttribute($val){
      return ($val !== null) ? asset('assets/images/products/'.$val) : "";
 }
    public function brand(){
        return $this->belongsTo(Brand::class)->withDefault();
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'product_categories');
    }

    public function tags(){
        return $this->belongsToMany(Tags::class,'product_tags');
    }

}