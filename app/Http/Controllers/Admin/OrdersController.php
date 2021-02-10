<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Order_details;
use DB;
class OrdersController extends Controller
{
    public function index(){
    	$commandes = Commande::paginate(15);
    	return view('admin.orders.index',compact('commandes'));
    }

     public function ChangeStatus(Request $request){
       // return $request;
        $commande = Commande::find($request->id);
        if(!$commande){
            return redirect()->back()->with("error","Cette commande n'exist pas");
        }

        try {
            DB::beginTransaction();
               $commande->status = $request->status;
               $commande->save();
               // $commande->update(['status' => $request->status]);
                
            DB::commit();
             session()->flash('success',"La commande a été modifiee avec succée");
            return redirect()->back();
        } catch (\Exception $e) {
             DB::rollback();
            // return $e;
            return redirect()->back()->with("error","Erreur dans le traitement, essayer plus tard");
        }
    }

    public function show($id){
      $commande = Commande::findOrFail($id);

      return view('admin.orders.show',compact('commande'));
    }
}
