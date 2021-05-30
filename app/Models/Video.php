<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    protected $table = 'vidoes';
    protected $fillable  = ['title','video'];

    public function getVideoAttribute($val)
    {
        return ($val !== null) ? asset('ceramica/public/assets/images/videos/' . $val) : "";
    }
}
