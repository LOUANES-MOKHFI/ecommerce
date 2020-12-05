<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\SubCategoryRequest;
use DB;
class SubCategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $subcategories = Category::Child()->orderBy('id','DESC')->paginate(PAGINATE_COUNT);
       return view('admin.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::Parent()->orderBy('id','DESC')->get();
        return view('admin.subcategories.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request, Category $subCategory)
    {
       // return $request;
        
        try {
           DB::beginTransaction();
         
           $subCategory->slug = $request->slug;
           if(!$request->has('is_active')){
               $subCategory->is_active = 0;
           }
           else{
               $subCategory->is_active = 1;
           }
           $subCategory->parent_id = $request->parent_id;
           $subCategory->name = $request->name;
           $subCategory->save();
           DB::commit();
           return redirect()->route('admin.subcategories')->with('success','تمت إضافة القسم الفرعي بنجاح.');
      
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
        $subCategory = Category::find($id);
        $categories = Category::Parent()->orderBy('id','DESC')->get();
        if(!$subCategory){
            return redirect()->route('admin.subcategories')->with(['error'=> 'هذا القسم الفرعي غير موجود']);
        }
        return view('admin.subcategories.edit',compact('subCategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubCategoryRequest $request, $id)
    {
        
        try {
            DB::beginTransaction();

            $subCategory = Category::orderBy('id','DESC')->find($id);
            if(!$subCategory){
                return redirect()->route('admin.subcategories')->with(['error'=> 'هذا القسم الفرعي غير موجود']);
            }
            if(!$request->has('is_active')){
                $subCategory->is_active = 0;
                //$request->request->add(['is_active' => 0]);
            }
            else{
                $subCategory->is_active = 1;
                //$request->request->add(['is_active' => 1]);
            }
            $subCategory->update($request->all());
            $subCategory->name = $request->name;
            $subCategory -> save();
           
            DB::commit();
            return redirect()->route('admin.subcategories')->with('success','تم التعديل بنجاح.');
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
        $subCategory = Category::orderBy('id','DESC')->find($id);
            if(!$subCategory){
                return redirect()->route('admin.subcategories')->with(['error'=> 'هذا القسم الفرعي غير موجود']);
            }
            $subCategory -> delete();
            return redirect()->route('admin.subcategories')->with('success','تم الحذف بنجاح.');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.subcategories')->with('error','خطأ في الملومات, يرجى التأكد.');
       }
    }

    public function changeStatus($id){
       
       
        $subCategory = Category::orderBy('id','DESC')->find($id);
        //return $mainCategory;
       if(!$subCategory){
        return redirect()->route('admin.subcategories')->with(['error'=> 'هذا القسم الفرعي غير موجود']);
         }
        //  $mainCategory->is_active;
           
          $status = $subCategory->is_active == 0 ? 1 : 0 ;
         // return $status;
          $subCategory -> is_active = $status;
          //return $mainCategory;
         // $maincategorie ->active = $status;
          $subCategory->save();
          return redirect()->route('admin.subcategories')->with('success','تم التحديث بنجاح.');
       
   }
}
