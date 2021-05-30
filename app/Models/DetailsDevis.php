<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailsDevis extends Model
{
    protected $table = 'devi_details';
    protected $fillable = ['devi_id','brand_id','product_id','color','format','surfaces','m_carrees'];

    
    public function brand(){
       return $this->belongsTo(Brand::class,'brand_id');
    }
    public function product(){
       return $this->belongsTo(Product::class,'product_id');
    }
}
