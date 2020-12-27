<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_verification extends Model
{
    protected $table = 'users_verificationCodes';
    protected $fillable = ['user_id','code','created_at','updated_at'];

    /*public function user(){
        return $this->belongsTo('User::class','id');
    }*/
}
