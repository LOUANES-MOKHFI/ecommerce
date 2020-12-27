<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $fillable = ['photo', 'created_at', 'updated_at'];


    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/images/sliders/' . $val) : "";
    }
}
