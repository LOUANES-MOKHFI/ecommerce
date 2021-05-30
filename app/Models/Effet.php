<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Effet extends Model
{
    protected $table = 'effet';
    protected $fillable = ['slug','name'];
}
