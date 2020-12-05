<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagsTranslation extends Model
{
    /**
    * the relations to eager on very query.
    *
    * @var array
    */
    protected $fillable = ['tag_id','name'];
    public $timestamps = false;
}
