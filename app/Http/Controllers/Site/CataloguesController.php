<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogues;

class CataloguesController extends Controller
{
    public function catalogue(){
    	$data = [];
    	$data['pamesas'] = Catalogues::where('brand_id',1)->get();
    	$data['saninduzas'] = Catalogues::where('brand_id',2)->get();
    	$data['abs'] = Catalogues::where('brand_id',3)->get();
    	$data['ecos'] = Catalogues::where('brand_id',4)->get();
    	$data['argentas'] = Catalogues::where('brand_id',5)->get();
    	$data['onixs'] = Catalogues::where('brand_id',6)->get();
        $data['BANHOAZIS'] = Catalogues::where('brand_id',7)->get();

    	return view('front.catalogue',$data);
    }
}
