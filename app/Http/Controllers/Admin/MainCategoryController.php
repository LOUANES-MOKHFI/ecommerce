<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\MainCategoryRequest;
use DB;
use App\Http\Enumerations\CategoryType;
class MainCategoryController extends Controller
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
        $categories = Category::select('id','parent_id')->orderBy('id','DESC')->get();
        return view('admin.categories.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainCategoryRequest $request, Category $mainCategory)
    {
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

            $filename ="";
          if($request->has('image'))
          {
          $filename = UploadImage('categories',$request->image);
          }

           $mainCategory->image = $filename;
           $mainCategory->parent_id = $request->parent_id;
           $mainCategory->slug = $request->slug;
           $mainCategory->name = $request->name;
           $mainCategory->save();
           DB::commit();
           return redirect()->route('admin.maincategories')->with('success','تمت إضافة القسم بنجاح.');
      
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
        $mainCategory = Category::find($id);
        
        if(!$mainCategory){
            return redirect()->route('admin.maincategories')->with(['error'=> 'هذا القسم غير موجود']);
        }
        return view('admin.categories.edit',compact('mainCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MainCategoryRequest $request, $id)
    {
        
        try {
            DB::beginTransaction();

            $mainCategory = Category::orderBy('id','DESC')->find($id);
            if(!$mainCategory){
                return redirect()->route('admin.maincategories')->with(['error'=> 'هذا القسم غير موجود']);
            }
            if(!$request->has('is_active')){
                $mainCategory->is_active = 0;
                //$request->request->add(['is_active' => 0]);
            }
            else{
                $mainCategory->is_active = 1;
                //$request->request->add(['is_active' => 1]);
            }

            $mainCategory->update($request->all());
             $filename ="";
              if($request->has('image'))
              {
              $filename = UploadImage('categories',$request->image);
              $mainCategory->image = $filename;
              }
          
           
           
            $mainCategory->name = $request->name;
            $mainCategory -> save();
           
            DB::commit();
            return redirect()->route('admin.maincategories')->with('success','تم التعديل بنجاح.');
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
        $mainCategory = Category::orderBy('id','DESC')->find($id);
            if(!$mainCategory){
                return redirect()->route('admin.maincategories')->with(['error'=> 'هذا القسم غير موجود']);
            }
            $mainCategory -> delete();
            return redirect()->route('admin.maincategories')->with('success','تم الحذف بنجاح.');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.maincategories')->with('error','خطأ في الملومات, يرجى التأكد.');
       }
    }

    public function changeStatus($id){
       
       
        $mainCategory = Category::orderBy('id','DESC')->find($id);
        //return $mainCategory;
       if(!$mainCategory){
        return redirect()->route('admin.maincategories')->with(['error'=> 'هذا القسم غير موجود']);
         }
        //  $mainCategory->is_active;
           
          $status = $mainCategory->is_active == 0 ? 1 : 0 ;
         // return $status;
          $mainCategory -> is_active = $status;
          //return $mainCategory;
         // $maincategorie ->active = $status;
          $mainCategory->save();
          return redirect()->route('admin.maincategories')->with('success','تم التحديث بنجاح.');
       
   }
 
}
