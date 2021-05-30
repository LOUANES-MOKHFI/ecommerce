<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Devis;
use App\Http\Requests\DeivsRequest;
use DB;
use App\Models\States;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Communes;
use App\Models\DetailsDevis;
use Validator;
class DevisController extends Controller
{
   

    public function getdevis($slug){
    	$data = [];
    	$data['states']  = States::all();
        $data['brands']  = Brand::all();
    	$data['product'] = Product::where('slug',$slug)->first();
      $data['products'] = Product::all();
        if(!$data['product']){
            session()->flash('error','Ce produit n\'exist pas');
            return redirect()->back();
        }
    	return view('front.devis',$data);
    }

    public function getCommune($id){
        $data = Communes::where('state_id',$id)->get();
        echo json_encode($data);
    }

     public function getproduct($id){
        $data = Product::where('brand_id',$id)->get();
        echo json_encode($data);
    }
    
    public function postDevis(Request $request){

           // return $request;
    	try {
    		DB::beginTransaction();
    		if(!$request->has('condition')){
                $request->request->add(['condition' => 0]);
            }
            else{
                $request->request->add(['condition' => 1]);
            }


            if($request->ajax()){
                $rules = array(
                    'fonction'   => 'required|min:3',
                    'Fname'      => 'required',
                    'Lname'      => 'required',
                    'email'      => 'required|email',
                    'phone'      => 'required|numeric',
                    'brand_id.*'   => 'required|exists:brands,id',
                    'product_id.*' => 'required|exists:products,id',
                    'color.*'      => 'required',
                    'format.*'     => 'required',
                    'surfaces.*'   => 'required',
                    'm_carrees.*'  => 'required',
                    'message'    => 'nullable|min:10|max:255',
                );
                $error = Validator::make($request->all(),$rules);

                if($error->fails()){
                    return response()->json([
                        'error' => $error->errors()->all()
                    ]);
                }

                ////insert informations client

                      $last_devis = Devis::create([
                        'fonction' => $request->fonction,
                        'Fname' => $request->Fname,
                        'Lname' => $request->Lname,
                        'wilaya' => $request->wilaya,
                        'ville' => $request->ville,
                        'email' => $request->email,
                        'phone' => $request->phone,
                       
                        'message' => $request->message,
                       // 'condition' => $request->condition,
                    ]);
                    
                ///insert information devis
                    $devi_id    = $last_devis->id;
                    $brand_id   = $request->brand_id;
                    $product_id = $request->product_id;
                    $color      = $request->color;
                    $format     = $request->format;
                    $surfaces   = $request->surfaces;
                    $m_carrees  = $request->m_carrees;

                    for($count =0; $count < count($brand_id); $count++){
                       DetailsDevis::create([
                            'devi_id'  => $devi_id,
                            'brand_id' => $brand_id[$count],
                            'product_id' => $product_id[$count],
                            'color' => $color[$count],
                            'format' => $format[$count],
                            'surfaces' => $surfaces[$count],
                            'm_carrees' => $m_carrees[$count],
                        ]);
                    }

                    return response()->json([
                        'success' => 'Le information de devi sont ajoutée avec success'
                    ]);
            }
            


           
    		DB::commit();
    		//session()->flash('success','Votre demande à étè bien envoyée');
    		//return redirect()->back();
    		
     	} catch (\Exception $e) {
    		return response()->json([
                        'error' => 'erreur de traitement, veuillez essayez plus tard'
                    ]);
    		DB::rollback();
    	}
    }
}
