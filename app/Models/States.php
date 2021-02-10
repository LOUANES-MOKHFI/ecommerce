<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;


class States extends Model
{
	use Translatable;
  protected $with = ['translations'];
  
  protected $translatedAttributes = ['name'];
   /**
   * the attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = ['actived','price'];

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
      // 'actived' => 'boolean'
   ];
   
   public function getActive(){
      return $this->actived == 1 ? __('admin/category.active') :  __('admin/category.notactive');
   }
   

      public function scopeActive($query){
         return $query->where('actived',1);
      }

}
