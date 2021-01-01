<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Attributes;
use App\Models\Options;
class ProductController extends Controller
{
    public function productsBySlug($slug){

        $data = [];
        $data['product'] = Product::where('slug',$slug)->first(); // get product by slug
        if(!$data['product']){

        }

        $product_id = $data['product']->id;  // get id product
       $product_categories_ids = $data['product']->categories->pluck('id');  // get all id categorie related with product

        $data['product_attributes'] = Attributes::whereHas('options', function($q) use($product_id){
            $q->whereHas('product', function($qq) use($product_id){
            $qq -> where('product_id',$product_id);
           }); 
        })->get();
        
        $data['related_products'] = Product::whereHas('categories', function($cat) use($product_categories_ids){
            $cat-> whereIn('category_id',$product_categories_ids);
        })->limit(20)->latest()->get();

        return view('front.products-details',$data);
    }
}
