<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Options extends Model
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
   protected $fillable = ['product_id','attribute_id','price'];

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

   public function OptionAttribute(){

   }

   public function product(){
      return $this->belongsTo(Product::class,'product_id');
   }
   public function attribute(){
      return $this->belongsTo(Attributes::class,'attribute_id');
   }

}
