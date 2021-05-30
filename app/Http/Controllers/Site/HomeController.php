<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sliders;
use App\Models\Category;
use App\Models\Product;
use App\Models\Commande;
use App\Models\Video;
class HomeController extends Controller
{
    public function home(){
   
        $data = [];
        $data['video'] = Video::limit(1)->latest()->first();
        $data['sliders'] = Sliders::all();
        return view('front.home',$data);

    }


    public function suiviCommande(Request $request){
        $code = $request->get('code');
        $commande = Commande::where('code',$code)->first();
        if(!$commande){
            return redirect()->back()->with('error',"Cette Commande n'existe pas");
        }

        return view('front.commande',compact('commande'));
    }
}
