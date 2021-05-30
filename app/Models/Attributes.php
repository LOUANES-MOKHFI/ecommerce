<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
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
  // protected $fillable = ['is_active','photo'];

/**
   * the relations to eager on very query.
   *
   * @var array
   */
   protected $hidden = ['translations'];


   public function options(){
      return $this->hasMany(Options::class,'attribute_id')->select('name','id','product_id','category_id')->distinct();
  }

  
}
