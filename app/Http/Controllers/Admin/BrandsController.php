<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Http\Requests\BrandsRequest;
use DB;
use Str;
class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $brands = Brand::orderBy('id','DESC')->paginate(PAGINATE_COUNT);
       return view('admin.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::Parent()->orderBy('id','DESC')->get();
        return view('admin.brands.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandsRequest $request, Brand $brand)
    {
        
        try {
           DB::beginTransaction();
         

           
           if(!$request->has('is_active')){
               $brand->is_active = 0;
           }
           else{
               $brand->is_active = 1;
           }
           $filename ="";
     		  if($request->has('photo'))
     		  {
			    $filename = UploadImage('brands',$request->photo);
			  }
          
           $brand->photo = $filename;
           //save translation
           $brand->name = $request->name;
           $brand->save();
           DB::commit();
           return redirect()->route('admin.brands')->with('success','تمت إضافة الماركة التجارية بنجاح.');
      
        } catch (\Throwable $ex) {
        return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        if(!$brand){
            return redirect()->route('admin.brands')->with(['error'=> 'هذه  الماركة التجارية غير موجودة']);
        }
        return view('admin.brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandsRequest $request, $id)
    {
        
        try {
            DB::beginTransaction();

            $brand = Brand::orderBy('id','DESC')->find($id);
            if(!$brand){
                return redirect()->route('admin.brands')->with(['error'=> ' هذه  الماركة التجارية غير موجودة ']);
            }
            if(!$request->has('is_active')){
                $brand->is_active = 0;
                //$request->request->add(['is_active' => 0]);
            }
            else{
                $brand->is_active = 1;
                //$request->request->add(['is_active' => 1]);
            }
            $filename ="";
            if($request->has('photo'))
            {
             $filename = UploadImage('brands',$request->photo);
           }
       
        $brand->photo = $filename;
            $brand->update($request->except('_token','id','photo'));
            //save translation
            $brand->name = $request->name;
            $brand -> save();
           
            DB::commit();
            return redirect()->route('admin.brands')->with('success','تم التعديل بنجاح.');
        } catch (\Throwable $ex) {
            return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try {
        $brand = Brand::orderBy('id','DESC')->find($id);
            if(!$brand){
                return redirect()->route('admin.brands')->with(['error'=> 'هذه  الماركة التجارية غير موجودة']);
            }
          $image =  Str::after($brand->photo,'images');
        
          $image = base_path('public/assets/images'.$image);
   
          unlink($image);
            $brand -> delete();
            return redirect()->route('admin.brands')->with('success','تم الحذف بنجاح.');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.brands')->with('error','خطأ في الملومات, يرجى التأكد.');
       }
    }

    public function changeStatus($id){
       
       
        $brand = Brand::orderBy('id','DESC')->find($id);
       if(!$brand){
        return redirect()->route('admin.brands')->with(['error'=> 'هذه  الماركة التجارية غير موجودة']);
         }
           
          $status = $brand->is_active == 0 ? 1 : 0 ;
          $brand -> is_active = $status;
          $brand->save();
          return redirect()->route('admin.brands')->with('success','تم التحديث بنجاح.');
       
   }
}
