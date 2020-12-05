<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
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
   protected $fillable = ['parent_id','slug','si_active'];

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

   public function scopeChild($query){
       return $query->wherenotNull('parent_id');
   }

   public function getActive(){
      return $this->is_active == 1 ? __('admin/category.active') :  __('admin/category.notactive');
   }
}
