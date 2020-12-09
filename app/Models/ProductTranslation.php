<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{

      /**
    * the relations to eager on very query.
    *
    * @var array
    */
    protected $fillable = ['name','description','short_description'];
    public $timestamps = false;
}
