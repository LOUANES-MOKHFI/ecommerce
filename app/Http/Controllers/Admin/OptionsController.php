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
           $prod->select('id');
       },'attribute'=> function($attr){
        $attr->select('id');
        }]
        )->select('id','price','product_id','attribute_id')->orderBy('id','DESC')->paginate(PAGINATE_COUNT);
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
     $data['products'] = Product::active()->select('id')->orderBy('id','DESC')->get();
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
               'price'        => $request->price,
               'product_id'   => $request->product_id,
               'attribute_id' => $request->attribute_id,
           ]);

          
           $option->name = $request->name;
           $option->save();
 
           DB::commit();
           return redirect()->route('admin.options')->with('success','تمت إضافة القسم بنجاح.');
      
        } catch (\Exception $ex) {
        return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }
    }
 
 
    public function edit($id)
    {
 
        $option = Options::find($id);
        if(!$option){
            return redirect()->route('admin.options')->with(['error'=> 'هذه الخاصية غير موجودة']);
        }
        $data = [];
        $data['products'] = Product::active()->select('id')->orderBy('id','DESC')->get();
        $data['attributes'] = Attributes::select('id')->orderBy('id','DESC')->get();
        return view('admin.options.edit',compact('option'),$data);
 
    }
 
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(OptionsRequest $request)
    {
        
        try {
           DB::beginTransaction();
 
           $option = Options::update([
               'price'        => $request->price,
               'product_id'   => $request->product_id,
               'attribute_id' => $request->attribute_id,
           ]);

          
           $option->name = $request->name;
           $option->save();
 
           DB::commit();
           return redirect()->route('admin.options')->with('success','تمت  التحديث بنجاح.');
      
        } catch (\Exception $ex) {
        return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }
    }
 
   
}
