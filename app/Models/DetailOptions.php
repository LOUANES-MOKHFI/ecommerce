<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailOptions extends Model
{
    protected $table = 'detail_options';
    protected $fillable = ['option_id','name','image'];

 public function getimageAttribute($val){
      return ($val !== null) ? asset('/ceramica/public/assets/images/details_options/'.$val) : "";
 }


}
