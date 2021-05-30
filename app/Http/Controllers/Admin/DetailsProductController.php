<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Details_product;
use DB;
class DetailsProductController extends Controller
{
     public function index()
   {
      $details = Details_product::orderBy('title','ASC')->get();
      return view('admin.products.general.details.index',compact('details'));
   }

    public function create()
   {
    $data = [];
    $data['products'] = Product::active()->get();
    return view('admin.products.general.details.add',$data);
   }

  public function store(Request $request)
   {
       
       
     // try {
          DB::beginTransaction();

        if($request->has('image')){
         
         $filename = '';
            $file = $request->file('image');
            $filename = UploadImage('detailProduct',$file);
            $request->filename = $filename;
          }

            $detail = Details_product::create([
              'product_id'      => $request->product_id,
               'title'      => $request->title,              
              'image' => $request->filename,
              
          ]);


          DB::commit();
          return redirect()->route('admin.products.detail')->with('success','le detail est ajoutée avec succées');
     
      /* } catch (\Exception $ex) {
       return redirect()->back()->with('error','Erreur de traitement, veuillez essayer plus tard');
         DB::rollback();
       }*/
   }

   public function edit($id)
   {
    $data = [];
    $data['products'] = Product::active()->get();
    $data['detail'] = Details_product::findOrFail($id);
    return view('admin.products.general.details.edit',$data);
   }

  public function update(Request $request,$id)
   {
       
        $detail = Details_product::findOrFail($id);
      try {
          DB::beginTransaction();

        if($request->has('image')){
         
         $filename = '';
            $file = $request->file('image');
            $filename = UploadImage('detailProduct',$file);
            $request->filename = $filename;
            $detail->image = $filename;
          }
          $detail->save();
         

            $detail -> update([
              'product_id'      => $request->product_id,
               'title'      => $request->title,              
              
          ]);


          DB::commit();
          return redirect()->route('admin.products.detail')->with('success','le detail est modifiée avec succées');
     
       } catch (\Exception $ex) {
       return redirect()->back()->with('error','Erreur de traitement, veuillez essayer plus tard');
         DB::rollback();
       }
   }

public function destroy($id){
  
   $detail = Details_product::find($id);
      if(!$detail){
        return redirect()->route('admin.products.detail')->with('error',"Ce detail n'existe pas");
      }

      $detail->delete();
      return redirect()->route('admin.products.detail')->with('error',"Le detail est supprimer  avec succees");

   

    return view('admin.products.general.detail.edit',$data);
   }
}
