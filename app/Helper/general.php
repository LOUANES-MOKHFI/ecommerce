<?php 



define('PAGINATE_COUNT',15);

function getFolder(){

     return app()-> getLocale() === 'ar' ? 'css-rtl' :'css';

}







 function AllparentCategorie(){

         return App\Models\Category::parent()->where('id','!=','6')
                                         ->where('id','!=','5')
                                         ->where('id','!=','13')
                                         ->get();

 }

  function AllchildCategorie(){

     return App\Models\Category::child()->get();

 }

 function Attribute(){

     return \App\Models\Attributes::get();

 }



function UploadImage($folder, $image){

     $image->store('/', $folder);

     $filename = $image->hashName();

     return  $filename;

  }



function getProduct($id){

     return \App\Models\Product::find($id);

 }



function All_contact(){

	return \App\Models\Contact::get();

}



function detail($id){

	return \App\Models\DetailOptions::where('option_id',$id)->get();

}



function allDevisnoread(){

    return \App\Models\Devis::where('viewed',0)->get();

}

?>