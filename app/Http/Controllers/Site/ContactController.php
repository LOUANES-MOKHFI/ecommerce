<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use DB;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Showrooms;
use App\Models\States;
class ContactController extends Controller
{
    public function contact(){
        $data = [];
        $data['states'] = States::all();
    	return view('front.contact',$data);
    }

     public function store(ContactRequest $request){
    	//try {
    		DB::beginTransaction();
    		Contact::create([
 			    'nom' => $request->nom,
                'prenom' => $request->prenom,
                'state_id' => $request->state_id,
                'commune_id' => $request->commune_id,
                'fax' => $request->fax,
                'adress' => $request->adress,
 			    'phone' => $request->phone,
 			    'email' => $request->email,
 			    'message' => $request->message,
                'typecontact' => $request->typecontact,
    		]);

    		DB::commit();
    		session()->flash('success','Votre message à étè bien envoyée');
    		return redirect()->back();
    		
    	/*} catch (\Exception $e) {
    		session()->flash('error','erreur de traitement, essayer plus tard');
    		return redirect()->back();
    		DB::rollback();
    	}*/
    }


    public function about(){
        $data['showroom1'] = Showrooms::find(3);
        $data['showroom2'] = Showrooms::find(4);
        $data['showroom3'] = Showrooms::find(4);
        
        $data['brands'] = Brand::all();
        //$data['users'] = User::get();
        return view('front.about',$data);
    }
}
