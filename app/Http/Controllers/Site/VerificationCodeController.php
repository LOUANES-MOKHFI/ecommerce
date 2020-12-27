<?php

namespace App\Http\Controllers\Site;

use App\Http\Services\VerificationServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VerifiationCodeRequest;
class VerificationCodeController extends Controller
{

    public $verificationservice;
    public function __construct(VerificationServices $verificationservice){
        $this->verificationservice = $verificationservice;

    }
    public function verify(VerifiationCodeRequest $request)
    {
    
        $check = $this->verificationservice -> checkOtpCode($request->code);

        if(!$check){ // code not correct
            return redirect()->route('get.verification.form')->with(['error','le code que vous avez saisi est invalide']);
        }
        else{  // verification code correct
            $this->verificationservice->removeOTpCode($request->code);
            return  redirect()->route('home');
        }
    }

    public function getVerifyCodePage(){
        return view('auth.verification');
    }
}
