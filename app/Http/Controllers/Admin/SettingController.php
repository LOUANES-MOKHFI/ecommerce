<?php

namespace App\Http\Controllers\Admin;
use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ShippingsRequest;
use DB;
class SettingController extends Controller
{
    public function editShippingMethods($type){
        if($type === 'free'){
            $shippingMethod =  Setting::where('key','free_shipping_label')->first();
        }
        elseif($type === 'outer'){
            $shippingMethod =  Setting::where('key','outer_label')->first();
        }
        elseif($type === 'inner'){
            $shippingMethod =  Setting::where('key','local_label')->first();
        }

        return view('admin.settings.shippings.edit',compact('shippingMethod'));

       
    }

    public function updateShippingMethods(ShippingsRequest $request,$id){
        try {

           // DB:beginTransaction();
            $shipping_methods = Setting::find($id);

            $shipping_methods-> update([
                'plain_value' => $request->plain_value,
            ]);
            
            $shipping_methods -> value = $request->value;
            $shipping_methods -> save();
            DB::commit();
            return redirect()->back()->with('success','تم التحديث بنجاح');

        } catch (\Exception $e) {
            return redirect()->back()->with('error','خطأ في الملومات, يرجى التأكد.');
            DB::rollback();
        }
       
    }
}
