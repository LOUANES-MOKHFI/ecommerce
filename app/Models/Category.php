<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
    protected $fillable = ['parent_id','slug','is_active'];

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

    public function scopeParent($query){
        return $query->whereNull('parent_id');
    }

    public function scopeChild($query){
      return $query->whereNotNull('parent_id');
   }

    public function getActive(){
       return $this->is_active == 1 ? __('admin/category.active') :  __('admin/category.notactive');
    }

    public function is_parent(){
       return $this->belongsTo(self::class,'parent_id');
    }

}