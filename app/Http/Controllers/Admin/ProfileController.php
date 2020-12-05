<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use DB;
use App\Models\Admin;

class ProfileController extends Controller
{
    public function editProfile(){
        $admin = auth('admins')->user();
        return view('admin.profile.edit',compact('admin'));
    }

    public function updateProfile(ProfileRequest $request){
       
      try {
          DB::beginTransaction();
          
          $admin = Admin::find(auth('admins')->user()->id);

          if($request->filled('password')){
             $request->merge(['password' => bcrypt($request->password)]);
          }

           unset($request['id']);
           unset($request['password_confirmation']);
          $admin->update($request->all());

          DB::Commit();

          return redirect()->back()->with('success','تم التعديل بنجاح.');
      } catch (\Exception $e) {
          
          return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
          DB::rollback();
      }
    }

   
}
