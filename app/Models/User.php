<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
       use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password','email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function verfifcation_code(){
        return $this->hasMany('User_verification::class','user_id');
    }

    public function wishlist(){
        return $this->belongsToMany(Product::class,'wish_lists')->withTimestamps();
    }

    public function wishlistHas($productId){
        return self::wishlist()->where('product_id',$productId)->exists();
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
