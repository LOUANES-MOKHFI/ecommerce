<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attributes;
use App\Http\Requests\AttributesRequest;

use DB;
class AttributeController extends Controller
{
    public function index(){
        $attributes = Attributes::orderBy('id','DESC')->paginate(PAGINATE_COUNT);
        return view('admin.attributes.index',compact('attributes'));

    }

    public function create(){
        return view('admin.attributes.add');
    }

    public function store(AttributesRequest $request)
    {
        //return $request;
        
        try {
           DB::beginTransaction();
           $attribute = Attributes::create([]);
           $attribute->name = $request->name;
           $attribute->save();
           DB::commit();
           return redirect()->route('admin.attributes')->with('success','تمت إضافة الخاصية  بنجاح.');
      
        } catch (\Throwable $ex) {
        return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
       }
    }


    public function edit($id){
        $attribute = Attributes::find($id);
        if(!$attribute){
            return redirect()->route('admin.attributes')->with(['error'=> 'هذه الخاصية غير موجودة']);
        }
        return view('admin.attributes.edit',compact('attribute'));

    }

    public function update(AttributesRequest $request,$id){
        try {
            $attribute = Attributes::find($id);
            if(!$attribute){
                return redirect()->route('admin.attributes')->with(['error'=> ' هذه الخاصية غير موجودة ']);
            }
            DB::beginTransaction();
           
            //save translation
            $attribute->name = $request->name;
            $attribute -> save();
           
            DB::commit();
            return redirect()->route('admin.attributes')->with('success','تم التعديل بنجاح.');
        } catch (\Throwable $ex) {
            return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }
    }

     public function destroy($id)
    {
       try {
        $option = Attributes::orderBy('id','DESC')->find($id);
            if(!$option){
                return redirect()->route('admin.attributes')->with(['error'=> 'Cette attribute n\'existe pas']);
            }
         
            $option -> delete();
            return redirect()->route('admin.attributes')->with('success','La suppression a ete faite avec success');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.attributes')->with('error','errur de traitement , essayer plus tard');
       }
    }
    public function changeStatus($id){

    }
}
