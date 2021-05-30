<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Communes extends Model
{
    protected $table = 'communes';
    protected $fillable = ['code_postal','nom','state_id'];
}
