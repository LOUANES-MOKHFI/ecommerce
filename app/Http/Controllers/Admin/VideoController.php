<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Requests\VideoRequest;
use DB;
use Str;
class VideoController extends Controller
{
     public function index()
    {

       $data['videos'] = Video::all();             
       return view('admin.videos.index',$data);
    }

    public function create()
    {
        //$categories = Category::Parent()->orderBy('id','DESC')->get();
        return view('admin.videos.add');
    }
     public function postVideo(Request $request)
   {
      
       $file = $request->file('dzfile');
       //return $request;
       $filename = UploadImage('videos',$file);
       return response()->json([
           'name' => $filename,
           'original_name' => $file->getClientOriginalname(),
       ]);
   }

   public function saveVideoDB(VideoRequest $request){
    try {

         if($request->has('document')){
                Video::create([
                	'title' => $request->title,
                     'video' => $request->document,
                 ]);
         }
         return redirect()->route('admin.videos')->with('success','تم التحديث بنجاح.');
   
        } catch (\Exception $ex) {
       return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
    }
   }

  
   
    public function edit($id)
    {
        $video = Video::find($id);
        if(!$video){
            return redirect()->route('admin.videos')->with(['error'=> 'Cette video n\'existe pas']);
        }
        return view('admin.videos.edit',compact('video'));
    }

   public function UpdateVideo(Request $request)
   {
      
       $file = $request->file('dzfile');
       //return $request;
       $filename = UploadImage('videos',$file);
       return response()->json([
           'name' => $filename,
           'original_name' => $file->getClientOriginalname(),
       ]);
   }

   public function saveUpdateVideoDB(VideoRequest $request,$id){
   	$video = Video::findOrFail($id);
    try {
         if($request->has('document')){
                $video->update([
                	'title' => $request->title,
                     'video' => $request->document,
                 ]);
         }
         return redirect()->route('admin.videos')->with('success','تم التحديث بنجاح.');
   
        } catch (\Exception $ex) {
       return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
    }
   }
    public function destroy($id)
    {
    try {
        $video = Video::find($id);
            if(!$video){
                return redirect()->route('admin.videos')->with(['error'=> 'cette video n\'exsite pas']);
            }
          //$video =  Str::after($video->video,'images');
        
          //$video = base_path('public/assets/images'.$video);
   
         // unlink($video);
            $video -> delete();
            return redirect()->route('admin.videos')->with('success','Le video est modifier avec suucees');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.videos')->with('error','Erreur de traitement, veuillez essayer plus tard');
       }
    }
}
