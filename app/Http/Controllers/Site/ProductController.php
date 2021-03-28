<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Attributes;
use App\Models\Options;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Tags;
use DB;
class ProductController extends Controller
{

    public function index()
    {

       $data['products'] = Product::active()->get();
       $data['categories'] = Category::select('id','slug')->distinct()->get();
       $data['brands'] = Brand::active()->get();
       
       $data['attributes'] = Attributes::all();
             
       return view('front.ceramic.all-ceramic',$data);
    }

     public function getproductsBySlug($slug){
       $data = [];
       $data['categories'] = Category::select('id','slug')->distinct()->get();
       $data['brands'] = Brand::active()->get();
       
       $data['attributes'] = Attributes::all();
       $data['cat'] = Category::where('slug','Like','%'.$slug.'%')->first(); // get product by slug
        if(!$data['cat']){
            return redirect()->back()->with(['error',"Cette category n'existe pas"]);
      
        }

        $category_id = $data['cat']->id; // get id catgeory
       // $product_categories_ids = $data['Category']->products->pluck('id');  // get all id categorie 
       
       
        $data['products'] = Product::whereHas('categories', function($q) use($category_id){
            
            $q -> where('category_id',$category_id);
           
        })->get();
       
        
        return view('front.ceramic.ceramic-category',$data);
    }

 

    public function filtre_product($id){
        
        if($id == 0 || empty($id)){
            $data = Product::get();
        }else{
            $data = Product::whereHas('categories', function($q) use($id){
            
            $q ->select('category_id')->whereRaw('category_id IN ('.$id.')');
           
        })->get();
}
        echo json_encode($data);
    }

     public function filtre_product_by_option($id){
        
            
       $data = Product::whereHas('options', function($q) use($id){
            
            $q ->select('id')->whereRaw('id IN ('.$id.')');
           
        })->get();
            
        echo json_encode($data);
    }

     public function filtre_product_by_brand($id){
      
        $data = DB::table('products')->selectRaw('name,image_principale,brand_id,slug')->whereRaw('brand_id IN ('.$id.')')->get();
        echo json_encode($data);
    }


   /* public function getproductsBySlug($slug){

        $data = [];
        $data['product'] = Product::where('slug',$slug)->first(); // get product by slug
        if(!$data['product']){
            return redirect()->back()->with(['error',"Cette marque n'existe pas"]);
      
        }
         $data['product']->viewed = $data['product']->viewed +1;
        $data['product']->save();

        $product_id = $data['product']->id;  // get id product
        $product_categories_ids = $data['product']->categories->pluck('id');  // get all id categorie related with product
        $product_tags_ids = $data['product']->tags->pluck('id');  // get all id tags related with product
       
        $data['product_attributes'] = Attributes::whereHas('options', function($q) use($product_id){
            $q->whereHas('product', function($qq) use($product_id){
            $qq -> where('product_id',$product_id);
           }); 
        })->get();
        $data['tags'] = Tags::whereHas('tags', function($cat) use($product_tags_ids){
            $cat-> whereIn('tags_id',$product_tags_ids);
        })->get();
        
        
        $data['related_products'] = Product::whereHas('categories', function($cat) use($product_categories_ids){
            $cat-> whereIn('category_id',$product_categories_ids);
        })->limit(8)->latest()->get();
        
        
        return view('front.products-details',$data);
    }

public function getproductsByBrand(Request $request){
    $data = [];
     $id = $request->get('brand');
         $data['brand'] = Brand::find($id);
        if(!$data['brand']){
                return redirect()->back()->with(['error',"Cette marque n'existe pas"]);
      }
         $data['products'] = Product::active()->where('brand_id',$data['brand']->id)->paginate(20);
        $data['categories'] = Category::select('id','slug')->distinct()->get();
         $data['brands'] = Brand::active()->get();
         $data['tags'] = Tags::all();
            return view('front.products-brand',$data);
        
        }
*/
public function search(Request $request){

   $data['products'] = Product::active()->where('slug','Like','%'.$request->products.'%')->get();
   $data['brands'] = Brand::active()->get();
   return view('front.products-search',$data);
}

public function filtrebyprice(Request $request){
          $minimum_price = $request->get('minprice');
          $maximum_price = $request->get('maxprice');
             $data['brands'] = Brand::active()->get();

           $data['products'] = Product::whereBetween('price', [$minimum_price, $maximum_price])
        ->paginate(20);
        $data['tags'] = Tags::all();
        return view('front.all-products',$data);
}



public function filtrebyordre($ordre){
        $data['products'] = Product::orderBy('price',$ordre)
        ->paginate(20);
           $data['brands'] = Brand::active()->get();
$data['tags'] = Tags::all();
        return view('front.all-products',$data);
}
 
 public function filtrebyvente(){
        $data['products'] = Product::orderBy('saled','DESC')
        ->paginate(20);
           $data['brands'] = Brand::active()->get();
$data['tags'] = Tags::all();
        return view('front.all-products',$data);
}



 public function filtre_product_in_category($id){
        
        if($id == 0 || empty($id)){
            $data = Product::get();
        }else{
            $data = Product::whereHas('categories', function($q) use($id){
            
            $q ->select('category_id')->whereRaw('category_id IN ('.$id.')');
           
        })->get();
}
        echo json_encode($data);
    }

     public function filtre_product_by_option_in_category($id){
        
            
       $data = Product::whereHas('options', function($q) use($id){
            
            $q ->select('id')->whereRaw('id IN ('.$id.')');
           
        })->get();
            
        echo json_encode($data);
    }

     public function filtre_product_by_brand_in_category($id){
      
        $data = DB::table('products')->selectRaw('name,image_principale,brand_id,slug')->whereRaw('brand_id IN ('.$id.')')->get();
        echo json_encode($data);
    }




}


