<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tags;
use App\Http\Requests\TagsRequest;
use DB;
use Str;
class TagsController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tags = Tags::orderBy('id','DESC')->paginate(PAGINATE_COUNT);
       return view('admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::Parent()->orderBy('id','DESC')->get();
        return view('admin.tags.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagsRequest $request, Tags $tag)
    {
        
        //try {
           DB::beginTransaction();
          // return $request;
          $tag->slug = $request->slug;

          
           //save translation
           $tag->name = $request->name;
           $tag->save();
           DB::commit();
           return redirect()->route('admin.tags')->with('success','تمت إضافة العلامة بنجاح.');
      
       // } catch (\Throwable $ex) {
       //   return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
        //    DB::rollback();
       // }
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
        $tag = Tags::find($id);
        if(!$tag){
            return redirect()->route('admin.tags')->with(['error'=> 'هذه العلامة غير موجودة']);
        }
        return view('admin.tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagsRequest $request, $id)
    {
        
       // try {
            DB::beginTransaction();

            $tag = Tags::orderBy('id','DESC')->find($id);
            if(!$tag){
                return redirect()->route('admin.tags')->with(['error'=> ' هذه  العلامة غير موجودة ']);
            }
           
            $tag->update($request->except('_token','id'));
            //save translation
            $tag->name = $request->name;
            $tag -> save();
           
            DB::commit();
            return redirect()->route('admin.tags')->with('success','تم التعديل بنجاح.');
      //  } catch (\Throwable $ex) {
       //     return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
       //     DB::rollback();
       // }
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
        $tag = Tags::orderBy('id','DESC')->find($id);
            if(!$tag){
                return redirect()->route('admin.tags')->with(['error'=> 'هذه العلامة غير موجودة']);
            }
         
            $tag -> delete();
            return redirect()->route('admin.tags')->with('success','تم الحذف بنجاح.');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.tags')->with('error','خطأ في الملومات, يرجى التأكد.');
       }
    }

    public function changeStatus($id){
       
       
        $tag = Tags::orderBy('id','DESC')->find($id);
        //return $mainCategory;
       if(!$tag){
        return redirect()->route('admin.tags')->with(['error'=> 'هذه العلامة غير موجودة']);
         }
        //  $mainCategory->is_active;
           
          $status = $tag->is_active == 0 ? 1 : 0 ;
         // return $status;
          $tag -> is_active = $status;
          //return $mainCategory;
         // $maincategorie ->active = $status;
          $tag->save();
          return redirect()->route('admin.tags')->with('success','تم التحديث بنجاح.');
       
   }
}
