<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Tags;

class CategoryController extends Controller
{
    public function getproductsByslug($slug){
        $data = [];
        $data['category'] = Category::where('slug',$slug)->first();
        if($data['category']){
            $data['products'] = $data['category']->products;
          $data['categories'] = Category::select('id','slug')->distinct()->get();
         $data['brands'] = Brand::active()->get();
         $data['tags'] = Tags::all();
            return view('front.products',$data);
        }
    }

    public function b(){

    }
    public function a(){
        
    }

}

