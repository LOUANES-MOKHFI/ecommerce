<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
     /**
    * the relations to eager on very query.
    *
    * @var array
    */
    protected $fillable = ['name'];
    public $timestamps = false;
}
