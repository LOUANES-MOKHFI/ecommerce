<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Showrooms;
use DB;
use App\Http\Requests\ShowroomsRequest;

class ShowroomsController extends Controller
{
     public function index(){
    	$showrooms = Showrooms::paginate(PAGINATE_COUNT);
    	return view('admin.showrooms.index',compact('showrooms'));
    }

    public function create(){
    	return view('admin.showrooms.add');
    }

    public function store(ShowroomsRequest $request, Showrooms $showrooms){
    	try {

           DB::beginTransaction();
          
           $showrooms->phone = $request->phone;
           $showrooms->adress = $request->adress;
			if($request->has('logo'))
     		  {
			    $filename = UploadImage('showrooms',$request->logo);
			    $showrooms->logo = $filename;
			  }
          
           $showrooms->save();
           DB::commit();
           return redirect()->route('admin.showrooms')->with(['success'=>'Le showroom est ajoutée avec sucées']);
      
        } catch (\Throwable $ex) {
      return redirect()->back()->with(['error'=>'Erreur de traitement, essayez plus tard']);
            DB::rollback();
       }
    }

     public function edit($id)
    {
        $showroom = Showrooms::find($id);
        if(!$showroom){
            return redirect()->route('admin.showrooms')->with(['error'=> 'Ce Showroom n\'exsite pas']);
        }
        return view('admin.showrooms.edit',compact('showroom'));
    }

      public function update(ShowroomsRequest $request, $id)
    {
        //return $request;
        try {
          $showrooms = Showrooms::find($id);
        if(!$showrooms){
            return redirect()->route('admin.showrooms')->with(['error'=> 'Ce Showroom n\'exsite pas']);
        }
           DB::beginTransaction();
          
           $showrooms->phone = $request->phone;
           $showrooms->adress = $request->adress;
      if($request->has('logo'))
          {
          $filename = UploadImage('showrooms',$request->logo);
          $showrooms->logo = $filename;
        }
          
           $showrooms->save();
           DB::commit();
           return redirect()->route('admin.showrooms')->with(['success'=>'Le showroom est Modifiée avec sucées']);
      
        } catch (\Throwable $ex) {
        return redirect()->back()->with(['error'=>'Erreur de traitement, essayez plus tard']);
            DB::rollback();
       }
    }

    public function destroy($id)
    {
       try {
        $showroom = Showrooms::orderBy('id','DESC')->find($id);
            if(!$showroom){
                return redirect()->route('admin.showrooms')->with(['error'=> 'Ce showroom n\'exsite pas']);
            }
          
            $showroom -> delete();
            return redirect()->route('admin.showrooms')->with(['success'=>'Le showroom est supprimée avec sucées']);

       } catch (\Throwable $ex) {
           return redirect()->route('admin.showrooms')->with(['error'=>'Erreur de traitement, essayez plus tard']);
       }
    }
}
