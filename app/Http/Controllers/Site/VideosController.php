<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Requests\VideoRequest;
use DB;
use Str;
class VideosController extends Controller
{
    public function videos(){
    	$data = [];
    	$data['videos'] = Video::all();

    	return view('front.videos',$data);
    }

}
