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
use App\Models\Admin;
use App\Models\Catalogues;
class AdminController extends Controller
{
    public function index(){
    	$data['products'] = Product::active()->get();
    	$data['marques'] = Brand::get();
    	$data['categories'] = Category::get();
    	$data['tags'] = Tags::get();
    	$data['users'] = User::get();
        $data['admins'] = Admin::get();
    	$data['catalogues'] = Catalogues::get();
        return view('admin.index',$data);
    }

}
