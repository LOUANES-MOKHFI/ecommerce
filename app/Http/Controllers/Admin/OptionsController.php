<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Options;
use App\Models\Product;
use App\Models\Attributes;
use App\Http\Requests\OptionsRequest;

use DB;

class OptionsController extends Controller
{
    public function index()
    {
      $options = Options::with(['product'=> function($prod){
           $prod->select('id','name');
       },'attribute'=> function($attr){
        $attr->select('id');
        }]
        )->select('id','name','product_id','attribute_id','category')->orderBy('id','DESC')->get();
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
     $data['products'] = Product::active()->select('id','name')->orderBy('id','DESC')->get();
     $data['attributes'] = Attributes::select('id')->orderBy('id','DESC')->get();
 
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
        try {
           DB::beginTransaction();
 
           $option = Options::create([
               'product_id'   => $request->product_id,
               'attribute_id' => $request->attribute_id,
               'name'         => $request->name,
               'category'     => $request->category,
           ]);

 
           DB::commit();
           return redirect()->route('admin.options')->with('success','تمت إضافة القسم بنجاح.');
      
        } catch (\Exception $ex) {
        return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }
    }
 
 
    public function edit($id)
    {
        $data = [];
        $data['option'] = Options::find($id);
        if(!$data['option']){
            return redirect()->route('admin.options')->with(['error'=> 'هذه الخاصية غير موجودة']);
        }
        
        $data['products'] = Product::active()->select('id','name')->orderBy('id','DESC')->get();
        $data['attributes'] = Attributes::select('id')->orderBy('id','DESC')->get();
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
 
           $option -> update([
               'product_id'   => $request->product_id,
               'attribute_id' => $request->attribute_id,
               'name'         => $request->name,
               'category'     => $request->category,
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
                return redirect()->route('admin.brands')->with(['error'=> 'Cette option n\'existe pas']);
            }
         
            $option -> delete();
            return redirect()->route('admin.brands')->with('success','La suppression a ete faite avec success');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.brands')->with('error','errur de traitement , essayer plus tard');
       }
    }
 
   
}
