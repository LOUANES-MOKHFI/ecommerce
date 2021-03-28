<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Tags;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Http\Requests\GeneralProductRequest;
use App\Http\Requests\PriceProductRequest;
use App\Http\Requests\StockProductRequest;
use App\Http\Requests\ImagesProductRequest;

use DB;
class ProductController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $products = Product::select('id','name','image_principale','slug','is_active','created_at')->orderBy('id','DESC')->paginate(PAGINATE_COUNT);
      return view('admin.products.general.index',compact('products'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {

    $data = [];
    $data['brands'] = Brand::active()->select('id')->orderBy('id','DESC')->get();
    $data['tags'] = Tags::select('id')->orderBy('id','DESC')->get();
    $data['categories'] = Category::active()->select('id')->orderBy('id','DESC')->get();

    return view('admin.products.general.add',$data);
   }

  
   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(GeneralProductRequest $request)
   {
       
       
     // try {
          DB::beginTransaction();
        
          if(!$request->has('is_active')){
                $request->request->add(['is_active' => 0]);
            }
            else{
                $request->request->add(['is_active' => 1]);
            }

        if($request->has('image_principale')){
            $file = $request->file('image_principale');
            $filename = UploadImage('products',$file);

          $product = Product::create([
              'slug'      => $request->slug,
              'brand_id'  => $request->brand_id,
              'is_active' => $request->is_active,
              'image_principale' => $filename,
              
          ]);
        }else
        {
          return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
        }

         
          $product->name = $request->name;
          $product->description = $request->description;
        //  $product->short_description = $request->short_description;
          $product->save();

          //product categories

         $product->categories()->attach($request->categories);
         $product->tags()->attach($request->tags);
         //tags products
         

          DB::commit();
          return redirect()->route('admin.products')->with('success','تمت إضافة القسم بنجاح.');
     
      // } catch (\Exception $ex) {
       //return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
        //   DB::rollback();
       //}
   }

 public function edit($id){
   $data = [];
    $data['product'] = Product::find($id);
      if(!$data['product']){
        return redirect()->route('admin.products')->with('error',"Ce produit n'existe pas");
      }

   
    $data['brands'] = Brand::active()->select('id')->orderBy('id','DESC')->get();
    $data['tags'] = Tags::select('id')->orderBy('id','DESC')->get();
    $data['categories'] = Category::active()->select('id')->orderBy('id','DESC')->get();

    return view('admin.products.general.edit',$data);
   }
  
    public function update(GeneralProductRequest $request,$id)
   {
       
      $product = Product::find($id);
      if(!$product){
        return redirect()->route('admin.products')->with('error',"Ce produit n'existe pas");
      }
     // try {
          DB::beginTransaction();
        
          if(!$request->has('is_active')){
                $request->request->add(['is_active' => 0]);
            }
            else{
                $request->request->add(['is_active' => 1]);
            }
            if($request->has('image_principale')){
            $file = $request->file('image_principale');
            $filename = UploadImage('products',$file);

            $product->update([
                'slug'      => $request->slug,
                'brand_id'  => $request->brand_id,
                'is_active' => $request->is_active,
                'image_principale' => $filename,
            ]);
            }else
            {
              return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            }

         
          $product->name = $request->name;
          $product->description = $request->description;
          $product->short_description = $request->short_description;
          $product->save();

          //product categories

         $product->categories()->attach($request->categories);
         $product->tags()->attach($request->tags);
         //tags products
         

          DB::commit();
          return redirect()->route('admin.products')->with('success','تمت إضافة القسم بنجاح.');
     
      // } catch (\Exception $ex) {
       //return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
        //   DB::rollback();
       //}
   }


   public function getPrice($product_id)
   {
    $product = Product::find($product_id);
    if(!$product){
        return redirect()->route('admin.products')->with('error','هذا المنتج ليس موجود');

    }

    return view('admin.products.price.add',compact('product'));
   }

   public function postPrice(PriceProductRequest $request)
   {
    try {
        DB::beginTransaction();
         
        Product::whereId($request->product_id)->update($request->only(['price','special_price','special_price_type','special_price_start','special_price_end'])); 

        DB::commit();
        return redirect()->route('admin.products')->with('success','تم التحديث بنجاح  .');
   
     } catch (\Exception $ex) {
     return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
         DB::rollback();
     }
   }

   public function getImages($product_id)
   {
    $product = Product::find($product_id);
    if(!$product){
        return redirect()->route('admin.products')->with('error','هذا المنتج ليس موجود');

    }
    return view('admin.products.images.add',compact('product'));
   }

   public function postImages(Request $request)
   {
      
       $file = $request->file('dzfile');
       //return $request;
       $filename = UploadImage('products',$file);
       return response()->json([
           'name' => $filename,
           'original_name' => $file->getClientOriginalname(),
       ]);
   }

   public function saveImageDB(ImagesProductRequest $request){
  
    try {
         if($request->has('document') && count($request->document) > 0){
             foreach($request->document as $image){
                Image::create([
                     'product_id' => $request->product_id,
                     'photo' => $image,
                 ]);
             }
         }
         return redirect()->route('admin.products')->with('success','تم التحديث بنجاح.');
   
        } catch (\Exception $ex) {
       return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
    }
   }

   public function getStock($product_id)
   {
    $product = Product::find($product_id);
    if(!$product){
        return redirect()->route('admin.products')->with('error','هذا المنتج ليس موجود');

    }
    return view('admin.products.stock.add',compact('product'));
   }

   public function postStock(StockProductRequest $request)
   {
      // return $request;
    try {
        DB::beginTransaction();
         
        Product::whereId($request->product_id)->update($request->except(['_token','product_id'])); 

        DB::commit();
        return redirect()->route('admin.products')->with('success','تم التحديث بنجاح.');
   
     } catch (\Exception $ex) {
    return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
         DB::rollback();
     }
   }

}
