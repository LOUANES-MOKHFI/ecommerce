<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Options;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attributes;
use App\Models\DetailOptions;
use App\Http\Requests\OptionsRequest;
use App\Http\Requests\DetailsOptionsRequest;
use DB;

class OptionsController extends Controller
{
    public function index()
    {
      $options = Options::with(['product'=> function($prod){
           $prod->select('id','name','slug');
       },'attribute'=> function($attr){
        $attr->select('id');
        }]
        )->select('id','category_id','name','product_id','attribute_id','category')->orderBy('id','DESC')->get();
        return view('admin.options.index',compact('options'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
     $data = [];
     $data['products'] = Product::active()->select('id','name','slug')->orderBy('id','DESC')->get();
     $data['attributes'] = Attributes::select('id')->orderBy('id','DESC')->get();
     $data['categories'] = Category::get();
 
     return view('admin.options.add',$data);
    }
 
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OptionsRequest $request)
    {        
        //try {
           DB::beginTransaction();
           $filename ="";
           $filename1 ="";
           $filename2 ="";
          if($request->has('img_couleur'))
          {
          $filename = UploadImage('couleur',$request->img_couleur);
        }
         if($request->has('img_format'))
          {
          $filename1 = UploadImage('format',$request->img_format);
        }
        if($request->has('img_finition'))
          {
          $filename2 = UploadImage('finition',$request->img_finition);
        }
        
           $option = Options::create([
               'product_id'   => $request->product_id,
               'category_id'   => $request->category_id,
               'attribute_id' => $request->attribute_id,
               'name'         => $request->name,
               'category'     => $request->category,
               'img_couleur'  => $filename,
               'img_format'  => $filename1,
               'img_finition'  => $filename2,
           ]);

 
           DB::commit();
           return redirect()->route('admin.options')->with('success','تمت إضافة القسم بنجاح.');
      
       /* } catch (\Exception $ex) {
        return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }*/
    }
 
 
    public function edit($id)
    {
        $data = [];
        $data['option'] = Options::find($id);
        if(!$data['option']){
            return redirect()->route('admin.options')->with(['error'=> 'هذه الخاصية غير موجودة']);
        }
        
        $data['products'] = Product::active()->select('id','name','slug')->orderBy('id','DESC')->get();
        $data['attributes'] = Attributes::select('id')->orderBy('id','DESC')->get();
        $data['categories'] = Category::get();
        return view('admin.options.edit',$data);
 
    }
 
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(OptionsRequest $request,$id)
    {
        $option = Options::find($id);
        if(!$option){
         return redirect()->route('admin.options')->with(['error'=> 'هذه الخاصية غير موجودة']);
        }
       // try {
          
           DB::beginTransaction();
           $filename ="";
           $filename1 ="";
           $filename2 ="";
            if($request->has('img_couleur'))
            {
             $filename = UploadImage('couleur',$request->img_couleur);
            }
           if($request->has('img_format'))
            {
            $filename1 = UploadImage('format',$request->img_format);
             }
           if($request->has('img_finition'))
                    {
                    $filename2 = UploadImage('finition',$request->img_finition);
                  }
            

           $option -> update([
               'product_id'   => $request->product_id,
               'category_id'  => $request->category_id,
               'attribute_id' => $request->attribute_id,
               'name'         => $request->name,
               'category'     => $request->category,
               'img_couleur'  => $filename,
               'img_format'   => $filename1,
               'img_finition' => $filename2,
           ]);

 

 
           DB::commit();
           return redirect()->route('admin.options')->with('success','تمت  التحديث بنجاح.');
      
        /*} catch (\Exception $ex) {
        return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }*/
    }

      public function destroy($id)
    {
       try {
        $option = Options::orderBy('id','DESC')->find($id);
            if(!$option){
                return redirect()->route('admin.options')->with(['error'=> 'Cette option n\'existe pas']);
            }
         
            $option -> delete();
            return redirect()->route('admin.options')->with('success','La suppression a ete faite avec success');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.options')->with('error','errur de traitement , essayer plus tard');
       }
    }
 
   ////// add option details


 public function allDetails($id)
    {
      $option = Options::find($id);
      $details = DetailOptions::where('option_id',$id)->get();
        return view('admin.options.details',compact('details','option'));
    }

    public function addDetails($id)
    {
        $data = [];
        $data['option'] = Options::find($id);
        if(!$data['option']){
            return redirect()->route('admin.options')->with(['error'=>  'Cette option n\'existe pas']);
        }
        
        return view('admin.options.add-details',$data);
 
    }
 
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storedetails(DetailsOptionsRequest $request,$id)
    {
        $option = Options::find($id);
        if(!$option){
         return redirect()->back()->with(['error'=>  'Cette option n\'existe pas']);
        }
       // try {
          
           DB::beginTransaction();
           $filename ="";

           
           if($request->has('image'))
                    {
                    $filename = UploadImage('details_options',$request->image);
                  }

           $details_options = DetailOptions::create([
               'name'   => $request->name,
               'option_id' => $id,
               'image'  => $filename,
           ]);
 
           DB::commit();
           return redirect()->back()->with('success','les details sont ajoutée avec succées');
      
        /*} catch (\Exception $ex) {
        return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }*/
    }

    public function editDetails($id)
    {
        $data = [];
        $data['detail'] = DetailOptions::find($id);
        if(!$data['detail']){
            return redirect()->route('details')->with(['error'=>  'Cette detail n\'existe pas']);
        }
        
        return view('admin.options.edit-detail',$data);
 
    }
 
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatedetails(DetailsOptionsRequest $request,$id)
    {
        $detail = DetailOptions::find($id);
        if(!$detail){
         return redirect()->back()->with(['error'=>  'Cette detail n\'existe pas']);
        }
       // try {
          
           DB::beginTransaction();
           $filename ="";

           
           if($request->has('image'))
            {
                $filename = UploadImage('details_options',$request->image);
                        $detail->update([
                   'name'   => $request->name,
                   'option_id' => $request->option_id,
                   'image'  => $filename,
               ]);
            }
            else{
                   $detail->update([
                       'name'   => $request->name,
                       'option_id' => $request->option_id,
                   ]);
            }
           DB::commit();
           return redirect()->back()->with('success','les details sont ajoutée avec succées');
      
        /*} catch (\Exception $ex) {
        return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }*/
    }


     public function destroydetails($id)
    {
       try {
        $option = DetailOptions::orderBy('id','DESC')->find($id);
            if(!$option){
                return redirect()->route('details')->with(['error'=> 'Cette option n\'existe pas']);
            }
         
            $option -> delete();
            return redirect()->route('details')->with('success','La suppression a ete faite avec success');

       } catch (\Throwable $ex) {
           return redirect()->route('details')->with('error','errur de traitement , essayer plus tard');
       }
    }

}
