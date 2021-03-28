<?php 

define('PAGINATE_COUNT',15);
function getFolder(){
     return app()-> getLocale() === 'ar' ? 'css-rtl' :'css';
}



 function AllparentCategorie(){
     return App\Models\Category::parent()->get();
 }

function UploadImage($folder, $image){
     $image->store('/', $folder);
     $filename = $image->hashName();
     return  $filename;
  }

function getProduct($id){
     return \App\Models\Product::find($id);
 }

 function new_product_arrival(){
 	return \App\Models\Product::latest()->orderBy('id','DESC')->limit(6)->get();
 }
 
 function pourcentage($price,$specialPrice){
 	$pourcentage =100 - (($specialPrice * 100)/$price);
 	
 	return number_format((float)$pourcentage, 2, '.', '');
 }

 function favorite(){
 	return auth()->user()->wishlist()->count();
 }

 function AllBrands(){
 	return App\Models\Brand::active()->get();
 }

 function LatestProduct(){
 	return App\Models\Product::active()->latest()->limit(10)->get();
 }

 function AllCategorie(){
 	 return App\Models\Category::parent()->select('id','slug')->with(['childrens' => function($q){
            $q->select('id','parent_id','slug');
            $q->with(['childrens' => function($qq){
                $qq->select('id','parent_id','slug');
            }]);
        }])->get();
 }
 function All_contact(){
    return App\Models\Contact::viewed()->get();
 }
?>