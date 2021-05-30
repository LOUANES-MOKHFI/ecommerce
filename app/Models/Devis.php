<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $table = 'devis';
    protected $fillable = ['fonction','Fname','Lname','wilaya','ville','email','phone','message','viewed','condition'];

     public function communes(){
       return $this->belongsTo(Communes::class,'ville');
    }
    public function state(){
       return $this->belongsTo(States::class,'wilaya');
    }
    public function details(){
       return $this->hasMany(DetailsDevis::class);
    }
    
}
