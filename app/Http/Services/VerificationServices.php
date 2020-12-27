<?php

namespace App\Http\Services;
use Request;
use App\Models\User_verification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class VerificationServices extends Middleware
{
    /**
     * set OTP code for mobile
     *
     * @param  $data
     * @return User_verification
     */
    public function setVerificationCode($data)
    {
        $code = mt_rand('100000','999999');
        $data['code'] = $code;
        User_verification::whereNotNull('user_id')->where(['user_id' => $data['user_id']])->delete();
        //User_verification::whereNotNull('code')->where(['code' => $data['code']])->delete();
        return User_verification::create($data);

    }

    public function getSMSVerificationMessageByAppName($code){
        $message = "your verification code for your account";

        return $code.$message;
    }

    public function checkOtpCode($code){
        
        if(Auth::guard()->check()){
               
            $verificationData = User_verification::where('user_id',Auth::user()->id)->first();
            
            if($verificationData->code == $code){
                
                //$user = Auth::user();
                //$user->email_verified_at = now();
               // $user->save();
                $user = User::where('id',Auth::user()->id)->update(['email_verified_at' => now()]);
               
                return true;
            }
            else{
                return false;
            }
            return false;
        }
    }

    public function removeOTpCode($code){
        User_verification::where('code',$code)->delete();
    }
}