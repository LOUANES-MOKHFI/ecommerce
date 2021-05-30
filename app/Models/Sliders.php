<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
	protected $table = 'sliders';
    protected $fillable = ['photo','title'];


    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('ceramica/public/assets/images/sliders/' . $val) : "";
    }
}
