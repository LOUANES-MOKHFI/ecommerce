<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sliders;
use App\Models\Category;
class HomeController extends Controller
{
    public function home(){

        $data = [];
        $data['sliders'] = Sliders::get(['photo']);
        $data['categories'] = Category::parent()->select('id','slug')->with(['childrens' => function($q){
            $q->select('id','parent_id','slug');
            $q->with(['childrens' => function($qq){
                $qq->select('id','parent_id','slug');
            }]);
        }])->get();
        return view('front.home',$data);

    }
}
