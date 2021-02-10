<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use Translatable;
    /**
   * the relations to eager on very query.
   *
   * @var array
   */
  protected $with = ['translations'];
  
  protected $translatedAttributes = ['name'];
   /**
   * the attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = ['slug'];

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
      // 'is_searchable' => 'boolean',
      // 'is_active' => 'boolean'
   ];
   
   public function tags(){
      return $this->belongsToMany(Product::class,'product_tags');
   }
   public function product(){
      return $this->belongsTo(Product::class,'product_id');
   }
}
