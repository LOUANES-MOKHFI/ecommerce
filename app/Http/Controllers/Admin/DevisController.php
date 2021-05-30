<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Devis;
use App\Models\DetailsDevis;
class DevisController extends Controller
{
     public function index()
    {
    	$devis = Devis::all();
    	return view('admin.devis.index',compact('devis'));
    }

     public function show($id)
    {
    	$devi = Devis::findOrFail($id);
        $details = DetailsDevis::where('devi_id',$devi->id)->get();
        $devi->viewed = 1;
        $devi->save();
    	return view('admin.devis.show',compact('devi','details'));
    }
}
