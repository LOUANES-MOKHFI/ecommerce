<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogues extends Model
{
    protected $table = 'catalogues';
    protected $fillable = ['title','brand_id','file','image'];

     public function getimageAttribute($val){
      return ($val !== null) ? asset('/ceramica/public/assets/images/catalogues/'.$val) : "";
	}
	public function getfileAttribute($val){
	  return ($val !== null) ? asset('/ceramica/public/assets/images/filecatalogue/'.$val) : "";
	}
}
