<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
     protected $table = 'commande';
     protected $fillable = ['user_id','state_id','mobile','commune','code_postal','comment','code'];

     public function orders(){
    	return $this->hasMany(Order_details::class,'order_id');
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function state(){
    	return $this->belongsTo(States::class);
    }
}
