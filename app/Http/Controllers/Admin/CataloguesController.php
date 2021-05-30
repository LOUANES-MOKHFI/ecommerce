<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogues;
use App\Models\Brand;
use App\Http\Requests\CatalogueRequest;
use DB;
use Str;
class CataloguesController extends Controller
{
    public function index()
    {
       $catalogues = Catalogues::orderBy('id','DESC')->paginate(PAGINATE_COUNT);
       return view('admin.catalogues.index',compact('catalogues'));
    }
 public function create()
    {
        $brands = Brand::orderBy('id','DESC')->get();
        return view('admin.catalogues.add',compact('brands'));
    }
 public function store(CatalogueRequest $request, Catalogues $catalogue)
    {
        //try {
           DB::beginTransaction();
         

           
           
           $filename ="";
     		  if($request->has('image'))
     		  {
			    $filename = UploadImage('catalogues',$request->image);
			  }
			   $filename1 ="";
     		  if($request->has('file'))
     		  {
			    $filename1 = UploadImage('filecatalogue',$request->file);
			  }
          
           $catalogue->image = $filename;
           $catalogue->file = $filename1;
           //save translation
           $catalogue->brand_id = $request->brand_id;
           $catalogue->title = $request->title;
           $catalogue->save();
           DB::commit();
           return redirect()->route('admin.catalogues')->with('success','Le catalogue est ajoutée avec succees');
      
       /* } catch (\Throwable $ex) {
        return redirect()->back()->with('error','Erreur de traitement, veuillez essayez plus tard');
            DB::rollback();
       }*/
    }

 public function edit($id)
    {
        $catalogue = Catalogues::find($id);
        if(!$catalogue){
            return redirect()->route('admin.catalogues')->with(['error'=> 'Ce catalogue n\'existe pas']);
        }
        $brands = Brand::orderBy('id','DESC')->get();
        return view('admin.catalogues.edit',compact('catalogue','brands'));
    }
public function update(CatalogueRequest $request, $id)
    {
        
        try {
            DB::beginTransaction();

            $catalogue = Catalogues::orderBy('id','DESC')->find($id);
            if(!$catalogue){
                return redirect()->route('admin.catalogues')->with(['error'=> 'Ce catalogue n\'existe pas']);
            }

           	  $filename ="";
     		  if($request->has('image'))
     		  {
			    $filename = UploadImage('catalogues',$request->image);
			    $catalogue->image = $filename;
			  }
			   $filename1 ="";
     		  if($request->has('file'))
     		  {
			    $filename1 = UploadImage('filecatalogue',$request->file);
			    $catalogue->file = $filename1;
			  }
          
           
           
           //save translation
			  $catalogue->brand_id = $request->brand_id;
           $catalogue->name = $request->name;
           $catalogue->save();
           
            DB::commit();
            return redirect()->route('admin.catalogues')->with('success','Le catalogue est modifiée avec success');
        } catch (\Throwable $ex) {
            return redirect()->back()->with('error','error','Erreur de traitement, veuillez essayez plus tard');
            DB::rollback();
        }
    }
public function destroy($id)
    {
       try {
        $catalogue = Catalogues::orderBy('id','DESC')->find($id);
            if(!$catalogue){
                return redirect()->route('admin.cataogues')->with(['error'=> 'Ce catalogue n\'existe pas']);
            }
          $image =  Str::after($catalogue->image,'images');
        
          $image = base_path('public/assets/images'.$image);
   
          unlink($image);
            $catalogue -> delete();
            return redirect()->route('admin.cataogues')->with('success','Le catalogue est supprimée avec success');

       } catch (\Throwable $ex) {
           return redirect()->route('admin.cataogues')->with('error','error','Erreur de traitement, veuillez essayez plus tard');
       }
    }
}
