<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\States;
use DB;
use App\Http\Requests\StatesRequest;
class StatesController extends Controller
{
    public function index(){
    	$states = States::paginate(PAGINATE_COUNT);
    	return view('admin.states.index',compact('states'));
    }

    public function create(){
    	return view('admin.states.add');
    }

    public function store(StatesRequest $request, States $state){
    	//try {

           DB::beginTransaction();
         

         
           
           if(!$request->has('actived')){
               $state->actived = 0;
           }
           else{
               $state->actived = 1;
           }
           $state->price = $request->price;
           //save translation

           $state->name = $request->name;
           $state->save();
           DB::commit();
           return redirect()->route('admin.states')->with('success','تمت إضافة الماركة التجارية بنجاح.');
      
        //} catch (\Throwable $ex) {
        //return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
      // }
    }

     public function edit($id)
    {
        $state = States::find($id);
        if(!$state){
            return redirect()->route('admin.states')->with(['error'=> 'هذه  الماركة التجارية غير موجودة']);
        }
        return view('admin.states.edit',compact('state'));
    }

      public function update(StatesRequest $request, $id)
    {
        
        try {
            DB::beginTransaction();

            $state = States::orderBy('id','DESC')->find($id);
            if(!$state){
                return redirect()->route('admin.states')->with(['error'=> ' هذه  الماركة التجارية غير موجودة ']);
            }
            if(!$request->has('actived')){
                $state->actived = 0;
                //$request->request->add(['is_active' => 0]);
            }
            else{
                $state->actived = 1;
                //$request->request->add(['is_active' => 1]);
            }
            $state->update($request->except('_token','id'));
            //save translation
            $state->name = $request->name;
            $state -> save();
           
            DB::commit();
            return redirect()->route('admin.states')->with('success','تم التعديل بنجاح.');
        } catch (\Throwable $ex) {
            return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }
    }

    public function destroy($id)
    {
       try {
        $state = States::orderBy('id','DESC')->find($id);
            if(!$state){
                return redirect()->route('admin.states')->with(['error'=> 'هذه  الماركة التجارية غير موجودة']);
            }
          
            $state -> delete();
            return redirect()->route('admin.states')->with('success','تم الحذف بنجاح.');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.states')->with('error','خطأ في الملومات, يرجى التأكد.');
       }
    }

    public function changeStatus($id){
       
       
        $state = States::orderBy('id','DESC')->find($id);
       if(!$state){
        return redirect()->route('admin.states')->with(['error'=> 'هذه  الماركة التجارية غير موجودة']);
         }
           
          $status = $state->actived == 0 ? 1 : 0 ;
          $state ->actived = $status;
          $state->save();
          return redirect()->route('admin.states')->with('success','تم التحديث بنجاح.');
       
   }

}
