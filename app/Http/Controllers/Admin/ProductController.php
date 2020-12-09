<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Tags;
use App\Models\Category;
use App\Http\Requests\GeneralProductRequest;
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
      $categories = Category::with('is_parent')->orderBy('id','DESC')->paginate(PAGINATE_COUNT);
      return view('admin.categories.index',compact('categories'));
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
   public function store(GeneralProductRequest $request, Product $product)
   {
       return $request;
      // return $request;
       
       try {
          DB::beginTransaction();
        
         
          if(!$request->has('is_active')){
              $mainCategory->is_active = 0;
          }
          else{
              $mainCategory->is_active = 1;
          }
          if($request->type == CategoryType::mainCategory){
              $request->request->add(['parent_id'=> null]);
          }
          $mainCategory->parent_id = $request->parent_id;
          $mainCategory->slug = $request->slug;
          $mainCategory->name = $request->name;
          $mainCategory->save();
          DB::commit();
         // return redirect()->route('admin.maincategories')->with('success','تمت إضافة القسم بنجاح.');
     
       } catch (\Throwable $ex) {
       //return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
           DB::rollback();
       }
   }
}
