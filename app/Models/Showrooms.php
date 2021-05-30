<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showrooms extends Model
{
    protected $table = 'showrooms';
    protected $fillable = ['phone','logo','adress'];

     public function getlogoAttribute($val){
      return ($val !== null) ? asset('/ceramica/public/assets/images/showrooms/'.$val) : "";
}
}
