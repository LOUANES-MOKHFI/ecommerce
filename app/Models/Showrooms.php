<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showrooms extends Model
{
    protected $table = 'showrooms';
    protected $fillable = ['title','logo','adress'];

     public function getlogoAttribute($val){
      return ($val !== null) ? asset('assets/images/showrooms/'.$val) : "";
}
}
