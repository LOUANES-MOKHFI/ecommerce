<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sliders;
use App\Models\Category;
use App\Models\Product;
use App\Models\Commande;
class HomeController extends Controller
{
    public function home(){

       /* $data = [];
        $data['principalcategories'] = Category::parent()->get();
        $data['last_add'] = Product::active()->latest()->limit(8)->get();
        $data['best_seller'] = Product::active()->orderBy('saled','DESC')->limit(8)->get();
        $data['best_visited'] = Product::active()->orderBy('viewed','DESC')->limit(8)->get();
        $data['promotion_products'] = Product::active()->where('special_price','<>','null')->limit(12)->get();
        $data['new_arrivals'] = Product::active()->where('special_price','<>','null')->latest()->limit(6)->get();

        $data['popular_products'] = Product::orderBy('viewed','desc')
                            ->orderBy('saled','desc')
                            ->take(5)->get();

        $data['cheapest_prices'] = Product::active()->orderBy('price','ASC')->limit(3)->get();
        $data['special_products'] = Product::active()->special()->limit(3)->get();*/
        return view('front.home');

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
