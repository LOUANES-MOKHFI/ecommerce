<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use DB;
use App\Models\Product;
use App\Models\User;
class ContactController extends Controller
{
    public function contact(){
    	return view('front.contact');
    }

     public function store(ContactRequest $request){
    	try {
    		DB::beginTransaction();
    		Contact::create([
 			    'name' => $request->name,
 			    'phone' => $request->phone,
 			    'email' => $request->email,
 			    'message' => $request->message,
    		]);

    		DB::commit();
    		session()->flash('success','Votre message à étè bien envoyée');
    		return redirect()->back();
    		
    	} catch (\Exception $e) {
    		session()->flash('error','erreur de traitement, essayer plus tard');
    		return redirect()->back();
    		DB::rollback();
    	}
    }


    public function about(){
        $data['products'] = Product::active()->get();
        $data['users'] = User::get();
        return view('front.about',$data);
    }
}
