<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Commande;
class AccountController extends Controller
{
   
 public function index(){
   $user = Auth::user();
   $commandes = Commande::where('user_id' ,$user->id)->get();

   	if(!$user){
   		return redirect()->back()->with(['error',"ce compte n'existe pas"]);
   	}
   	return view('front.account',compact('user','commandes'));
   }

    public function updateProfile(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $user = User::findOrFail(Auth::user()->id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->save();
        Session()->flash('success','la modification des informations a été faite avec success');
        return redirect()->back();
    }


     public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

           $hashedPassword = auth('web')->user()->password;

          //$hashedPassword = Auth::user()->password;
        //if (Hash::check($request->old_password,$hashedPassword))
        //{   return $request->old_password;
            if (!Hash::check($request->password,$hashedPassword))
            {
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($request->password);
                $user->save();
              
               // auth('web')->user()->logout();
                Session()->flash('success','la modification de mot de passe a été faite avec success');
                return redirect()->back();
            } else {
            	Session()->flash('error',"le nouvelle mot de passe ne peut pas etre le meme avec l'ancien password success");
                return redirect()->back();
            }
        //} else {
        //	Session()->flash('error',"erreur dans le traitement, veuillez essayez plus tard");
          //  return redirect()->back();
        //}

    }
}
