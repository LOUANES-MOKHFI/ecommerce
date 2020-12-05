<?php 

define('PAGINATE_COUNT',15);
function getFolder(){
     return app()-> getLocale() === 'ar' ? 'css-rtl' :'css';
}

function UploadImage($folder, $image){
     $image->store('/',$folder);
     $filename = $image->hashName();
     return $filename;
  }

?>