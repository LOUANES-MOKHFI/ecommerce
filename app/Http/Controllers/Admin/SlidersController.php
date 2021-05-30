<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sliders;
use App\Http\Requests\SliderImagesRequest;
use DB;
use Str;
class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sliders = Sliders::orderBy('id','DESC')->get();
       return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$categories = Category::Parent()->orderBy('id','DESC')->get();
        return view('admin.sliders.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderImagesRequest $request, Sliders $slider)
    {
        try {
           DB::beginTransaction();
         
           $filename ="";
     		  if($request->has('photo'))
     		  {
			    $filename = UploadImage('sliders',$request->photo);
                $slider->photo = $filename;
			  }
          
           
           //save translation
           $slider->title = $request->title;
           $slider->save();
           DB::commit();
           return redirect()->route('admin.sliders')->with('success','l\'image est ajouter avec succees');
      
        } catch (\Throwable $ex) {
        return redirect()->back()->with('error','Erreur de traitement, veuillez essayer plus tard');
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
        $slider = Sliders::find($id);
        if(!$slider){
            return redirect()->route('admin.sliders')->with(['error'=> 'Cette slide n\'existe pas']);
        }
        return view('admin.sliders.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderImagesRequest $request, $id)
    {
        
        try {
            DB::beginTransaction();

            $slider = Sliders::orderBy('id','DESC')->find($id);
            if(!$slider){
                return redirect()->route('admin.sliders')->with(['error'=> ' Cette slide n\'existe pas ']);
            }
            
            $filename ="";
            if($request->has('photo'))
            {
             $filename = UploadImage('sliders',$request->photo);
              $slider->photo = $filename;
           }
       
       	  
           
            //save translation
            $slider->title = $request->title;
            $slider -> save();
           
            DB::commit();
            return redirect()->route('admin.sliders')->with('success','l\'image a ete modifier avec success');
        } catch (\Throwable $ex) {
            return redirect()->back()->with('error','Erreur de traitement,veuillez essayer plus tard');
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
        $slider = Sliders::orderBy('id','DESC')->find($id);
            if(!$slider){
                return redirect()->route('admin.sliders')->with(['error'=> 'cette slide n\'exsite pas']);
            }
          $image =  Str::after($slider->photo,'images');
        
          $image = base_path('public/assets/images'.$image);
   
          unlink($image);
            $slider -> delete();
            return redirect()->route('admin.sliders')->with('success','L\'image est modifier avec suucees');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.sliders')->with('error','Erreur de traitement, veuillez essayer plus tard');
       }
    }

   
}
