<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;
use Cart;
use Session;
use DB;
use App\Events\NewOrder;
use App\Models\Order;
use App\Models\User;
use App\Models\States;
use App\Models\Commande;
use App\Models\Order_details;
use App\Http\Requests\CommandeRequest;

use Illuminate\Support\Facades\Auth;

class PayementController extends Controller
{
 
    public function getPayments(){
        return view('front.cart.payments');
    }

   
    public function processPayment(Request $request,Order $order){
       // return Cart::subtotal(0,0).'<br>'.Cart::subtotal();
        try{
        

            Stripe::setApiKey(env('STRIPE_SECRET'));
        //return Cart::subtotal(0,0,0);
         $charge = Charge::create ([
                "amount" => Cart::subtotal(0,0,0),
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Payement Chrili." 
        ]);

        if($charge){
        $amount = Cart::subtotal();
        $user_id = Auth::user()->id;
        
        $order->user_id = $user_id;
        $order->amount  = $amount;
        event(new NewOrder($order));

        $order->save();
            Cart::destroy();
            //return new NewOrder($order);
          
            Session::flash('success', 'Payment has been successfully processed.');        
            return redirect()->route('site.cart.index');
        }
        else{
           
            Session::flash('errors', 'erreur dans le traitement, essayer plus tard');
            return redirect()->back();

        }
        

       }catch(\Exception $e){
            Session::flash('errors', 'erreur dans le traitement, essayer plus tard');
            return redirect()->back();
            DB::rollback();
        }
        
        
        }


         public function getPayments_shipping(){
        $states = states::active()->get();
        $user = User::find(Auth::user()->id);
        return view('front.cart.paymentsShipping',compact('states','user'));
    }

    public function processPayment_shipping(CommandeRequest $request, Commande $commande){
           
           $code = mt_rand('10000','99999');
        try {
            DB::beginTransaction();
            $user = Auth::user();
            $products = Cart::Content();

             $id = $commande->create([
              'user_id'        => $user->id,
              'state_id'       => $request->states_id,
              'mobile'         => $request->mobile,
              'commune'        => $request->commune,
              'code_postal'    => $request->code_postal,
              'comment'        => $request->comment,
              'code'           => $code,
            ])->id;
             
            
            
            
                 
            
        if($commande){
       foreach(Cart::Content() as $product)
            {
            $order_detail = new Order_details();
             $order_detail->create([
              'order_id'       => $id,
              'product_id'     => $product->id,
              'qte_product'    => $product->qty,
            ]);

             }   
            Cart::destroy();  
            DB::commit();        
            Session::flash('success', 'Payment has been successfully processed.');        
            return redirect()->route('site.cart.index');
        }
        else{
           
            Session::flash('errors', 'erreur dans le traitement, essayer plus tard');
            return redirect()->back();

        }
        

      }catch(\Exception $e){
            Session::flash('errors', 'erreur dans le traitement, essayer plus tard');
            return redirect()->back();
            DB::rollback();
        }
        
    }
}