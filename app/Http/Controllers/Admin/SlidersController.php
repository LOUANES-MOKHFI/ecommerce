<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sliders;
use DB;
use App\Http\Requests\SliderImagesRequest;
class SlidersController extends Controller
{
   
    public function addImages()
    {

         $images = Sliders::get(['photo']);
        return view('admin.sliders.images.add', compact('images'));
    }

    //to save images to folder only
    public function saveSliderImages(Request $request)
    {

        $file = $request->file('dzfile');
        //return $request;
        $filename = UploadImage('sliders',$file);
        return response()->json([
            'name' => $filename,
            'original_name' => $file->getClientOriginalname(),
        ]);
    }

    public function saveSliderImagesDB(SliderImagesRequest $request)
    {

        try {
            // save dropzone images
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Sliders::create([
                        'photo' => $image,
                    ]);
                }
            }

            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {

        }
    }

}
