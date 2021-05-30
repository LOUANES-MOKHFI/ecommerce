<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Astrotomic\Translatable\Translatable;
//use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
  
  //use softDeletes;
 
   protected $fillable = ['name','brand_id','effet_id','slug','file','price','special_price','special_price_type'
   ,'special_price_start','special_price_end','selling_price','manage_stock','qty','in_stock','is_active','special','image_principale','description'];
   
   //protected $with = ['translations'];
  
 //  protected $translatedAttributes = ['name','description','short_description'];
/**
   * the relations to eager on very query.
   *
   * @var array
   
   protected $hidden = ['translations'];

    /**
   * the attributes that should be cast to native types.
   *
   * @var array
   
   protected $casts = [
       'manage_stock' => 'boolean',
       'is_stock' => 'boolean',
      // 'is_active' => 'boolean'
   ];

   protected $date = [
    'special_price_start' => 'boolean',
    'special_price_end' => 'boolean',
    'start_date' => 'boolean',
    'end_date' => 'boolean',
    'deleted_at' => 'boolean'
    ];
    */

    public function scopeActive($query){
        return $query->where('is_active',1);
     }

     public function scopeSpecial($query){
        return $query->where('special',1);
     }


    public function scopeDelete($query){
        return $query->where('deleted_at',null);
     }

    public function getActive(){
        return $this->is_active == 1 ? __('admin/products.active') :  __('admin/products.notactive');
     }

   public function getphotoAttribute($val){
      return ($val !== null) ? asset('ceramica/public/assets/images/products/'.$val) : "";
 }
 /*public function getfichierAttribute($val){
      return ($val !== null) ? asset('ceramica/public/assets/images/file/'.$val) : "";
 }*/

    public function brand(){
        return $this->belongsTo(Brand::class)->withDefault();
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'product_categories');
    }

    public function tags(){
        return $this->belongsToMany(Tags::class,'product_tags');
    }

    public function options(){
        return $this->hasMany(Options::class,'product_id');
    }

    public function images(){
        return $this->hasMany(Image::class,'product_id');
    }

    public function cart_product(){
        return $this->belongsTo(self::class,'id');
    }
}
