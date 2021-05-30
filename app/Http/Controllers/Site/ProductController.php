<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Attributes;
use App\Models\Options;
use App\Models\Category;
use App\Models\DetailOptions;
use App\Models\Brand;
use App\Models\Tags;
use App\Models\Effet;
use DB;
use App\Models\Details_product;
class ProductController extends Controller
{

    public function index()
    {

       $data['products'] = Product::active()->orderBy('name','ASC')->get();
       $data['categories'] = Category::select('id','slug')->parent()->where('slug','!=','salle-de-bain')->distinct()->get();
       $data['brands'] = Brand::active()->get();
       
       $data['attributes'] = Attributes::all();
             
       return view('front.ceramic.all-ceramic',$data);
    }

     public function getsalledebainByOption($slug){
     $data = [];

       $data['categories'] = Category::select('id','slug')
        ->parent()
        ->where('id','!=','6')
        ->where('id','!=','5')
        ->where('id','!=','13')
        ->distinct()->get();
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
           
        })->orderBy('name','ASC')->get();
      // $data['name'] = $name;
            
        return view('front.ceramic.ceramic-option',$data);
    }

     public function getcategoryBySlug($slug){
       $data = [];
       $data['effets'] = Effet::where('name','<>','Autre')->get();
       $data['categories'] = Category::select('id','slug')
        ->parent()
        ->where('id','!=','6')
        ->where('id','!=','5')
        ->where('id','!=','13')
        ->distinct()->get();
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
           
        })->orderBy('name','ASC')->get();
       
         
        return view('front.ceramic.ceramic-category',$data);
    }

 

    public function filtre_product($id){
        
        if($id == 0 || empty($id)){
            $data = Product::get();
        }else{
            $data = Product::whereHas('categories', function($q) use($id){
            
            $q ->select('category_id')->whereRaw('category_id IN ('.$id.')');
           
        })->orderBy('name','ASC')->get();
}
        echo json_encode($data);
    }

     public function filtre_product_by_option($id){
        
            
       $data = Product::whereHas('options', function($q) use($id){
            
            $q ->select('id')->whereRaw('id IN ('.$id.')');
           
        })->orderBy('name','ASC')->get();
            
        echo json_encode($data);
    }

     public function filtre_product_by_brand($id){
      
        $data = DB::table('products')->selectRaw('name,image_principale,brand_id,slug')->whereRaw('brand_id IN ('.$id.')')->orderBy('name','ASC')->get();
        echo json_encode($data);
    }

    


    public function getproductsBySlug($slug){

        $data = [];
        $data['product'] = Product::where('slug',$slug)->first(); // get product by slug
        if(!$data['product']){
            return redirect()->back()->with(['error',"Ce produit n'existe pas"]);
      
        }
        //$data['product']->viewed = $data['product']->viewed +1;
        //$data['product']->save();

        $product_id = $data['product']->id;  // get id product
        $product_categories_ids = $data['product']->categories->pluck('id');  // get all id categorie related with product
        $product_tags_ids = $data['product']->tags->pluck('id');  // get all id tags related with product
       
        ////get couleur option for product
        $data['options'] = Options::where('product_id',$product_id)->get();

        $data['product_attributes'] = Attributes::whereHas('options', function($q) use($product_id){
            $q->whereHas('product', function($qq) use($product_id){
            $qq -> where('product_id',$product_id);
           }); 
        })->get();
       /* $data['tags'] = Tags::whereHas('tags', function($cat) use($product_tags_ids){
            $cat-> whereIn('tags_id',$product_tags_ids);
        })->get();
        
        */
        $data['related_products'] = Product::whereHas('categories', function($cat) use($product_categories_ids){
            $cat-> whereIn('category_id',$product_categories_ids);
        })->limit(8)->latest()->get();
        
        $data['countouleur'] =  Options::where('product_id',$product_id)->where('attribute_id',2)->get(); 
        $data['countformat'] =  Options::where('product_id',$product_id)->where('attribute_id',3)->get(); 
        $data['counfinition'] =  Options::where('product_id',$product_id)->where('attribute_id',7)->get(); 

       


        
        return view('front.ceramic.products-details',$data);
    }
        public function getproductsSalleBySlug($slug){

        $data = [];
        $data['product'] = Product::where('slug',$slug)->first(); // get product by slug
        if(!$data['product']){
            return redirect()->back()->with(['error',"Ce produit n'existe pas"]);
      
        }
        //$data['product']->viewed = $data['product']->viewed +1;
        //$data['product']->save();

        $product_id = $data['product']->id;  // get id product
        $product_categories_ids = $data['product']->categories->pluck('id');  // get all id categorie related with product
        $product_tags_ids = $data['product']->tags->pluck('id');  // get all id tags related with product
       
        ////get couleur option for product
        $data['options'] = Options::where('product_id',$product_id)->get();

        $data['product_attributes'] = Attributes::whereHas('options', function($q) use($product_id){
            $q->whereHas('product', function($qq) use($product_id){
            $qq -> where('product_id',$product_id);
           }); 
        })->get();
       /* $data['tags'] = Tags::whereHas('tags', function($cat) use($product_tags_ids){
            $cat-> whereIn('tags_id',$product_tags_ids);
        })->get();
        
        */
         $data['details_product'] = Details_product::where('product_id',$product_id)->get();
        $data['related_products'] = Product::whereHas('categories', function($cat) use($product_categories_ids){
            $cat-> whereIn('category_id',$product_categories_ids);
        })->get();
        
       /* $data['countouleur'] =  Options::where('product_id',$product_id)->where('attribute_id',2)->get(); 
        $data['countformat'] =  Options::where('product_id',$product_id)->where('attribute_id',3)->get(); 
        $data['counfinition'] =  Options::where('product_id',$product_id)->where('attribute_id',7)->get(); 
        */
        return view('front.ceramic.products-details-salle-de-bain',$data);
    }

   
/*
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

   $data['products'] = Product::active()->where('name','Like','%'.$request->product.'%')->orderBy('name','ASC')->get();
   return view('front.ceramic.ceramic-search',$data);
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
           
        })->orderBy('name','ASC')->get();
}
        echo json_encode($data);
    }

     public function filtre_product_by_option_in_category($id,$cat_id){
        
            
       $data = Product::whereHas('options', function($q) use($id,$cat_id){
            
            $q ->select('id','category_id')->whereRaw('id IN ('.$id.')')->whereRaw('category_id',$cat_id);
           
        })->orderBy('name','ASC')->get();
            
        echo json_encode($data);
    }

     public function filtre_product_by_brand_in_category($id){
      
        $data = DB::table('products')->selectRaw('name,image_principale,brand_id,slug')->whereRaw('brand_id IN ('.$id.')')->get();
        echo json_encode($data);
    }

   public function getDetailsOption($id){
     $details = DetailOptions::where('option_id',$id)->get();
     echo json_encode($details);
   }

   public function getProductByEffet($slug){
    $data = [];
    $data['effets'] = Effet::all();
     $data['effet'] = Effet::where('slug',$slug)->first();
     $id = $data['effet']->id;
     if(!$data['effet']){
            return redirect()->back()->with(['error',"Cet effet n'existe pas"]);
        }
   $data['products'] = Product::where('effet_id',$id)->orderBy('name','ASC')->get();

    return view('front.ceramic.ceramic-effet',$data);


   }

    public function filtre_product_by_effet($id){
      
        $data = DB::table('products')->selectRaw('name,image_principale,effet_id,slug')->whereRaw('effet_id IN ('.$id.')')->get();
        echo json_encode($data);
    }
}


