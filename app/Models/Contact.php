<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $table = 'contact';
   protected $fillable = ['nom','prenom','state_id','commune_id','adress','email','phone','fax','message','typecontact'];

   public function scopeViewed($query){
        return $query->where('viewed',0);
     }

     public function communes(){
       return $this->belongsTo(Communes::class,'commune_id');
    }
    public function state(){
       return $this->belongsTo(States::class,'state_id');
    }
}
