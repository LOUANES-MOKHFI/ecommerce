<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
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
   protected $fillable = ['is_active','photo'];

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
   
   public function getActive(){
      return $this->is_active == 1 ? __('admin/category.active') :  __('admin/category.notactive');
   }

   public function getphotoAttribute($val){
      return ($val !== null) ? asset('assets/images/brands/'.$val) : "";
 }

}
