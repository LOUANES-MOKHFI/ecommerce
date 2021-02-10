<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    protected $table = 'order_details';
    protected $fillable = ['order_id','product_id','qte_product'];

    public function commande(){
    	return $this->belongsTo(Commande::class);
    }

    public function product(){
    	return $this->belongsTo(product::class);
    }
}
