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
        $order->save();
            Cart::destroy();
            //return new NewOrder($order);
            event(new NewOrder($order));
          
            Session::flash('success', 'Payment has been successfully processed.');        
            return redirect()->route('site.cart.index');
        }
        else{
           
            Session::flash('errors', 'Payment has been successfully processed.');
            return redirect()->back();

        }
        

       }catch(\Exception $e){
            Session::flash('errors', 'Payment has been successfully processed.');
            return redirect()->back();
            DB::rollback();
        }
        
        
        }
}