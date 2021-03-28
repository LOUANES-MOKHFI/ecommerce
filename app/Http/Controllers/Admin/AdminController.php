<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tags;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Commande;
use App\Models\Order_details;
use App\Models\Subscribers;
class AdminController extends Controller
{
    public function index(){
    	$data['products'] = Product::active()->get();
    	$data['brands'] = Brand::get();
    	$data['caregories'] = Category::get();
    	$data['tags'] = Tags::get();
    	//$data['orders'] = Commande::get();
    	$data['users'] = User::get();
    	$data['newsletters'] = Subscribers::get();
        return view('admin.index',$data);
    }

}
