<?php

namespace App\Http\Services\SMSGetways;
use Request;
use App\Models\User_verification;

class VictoryLinkSms
{

    public $client;
    public function __construct(){
        if(! $this->client){
            $this->client = new Client();
        }
    }

    public function sendSms($phone, $message, $type = 'non_servey', $language = 'fr', $model = null){
        
        $params = [
            'UserName' => config('sms.VICTORY_LINK.USERNAME'),
            'Password' => config('sms.VICTORY_LINK.PASSWORD'),
            'SMSText'  => $message,
            'SMSLang'  => $language == 'ar' ? 'A' : 'F',
            'SMSSender' => config('sms.VICTORY_LINK.SMS_SENDER'),
            'SMSReciver'=> $phone,
        ];
        try {
            $smsURL = 'https://smsvas.vlserv.com/kannelSending/service.asmx/SENDSMS';
            
            $response = $this->client->post($smsURL, ['form_params' => $params]);
            $content = $response->getBody();

            $xml = (array) simplexml_load_string($content);

            if($xml[0] == '0'){
                return true;
            }
            else{

                info('VictoryLink error status!');
                return false;
            }

        } catch (\Exception $e) {
            info("VictoryLink has been trying to send sms to $phone but operation failed !");
                return false;
        }
    }

    /**
     * SET YOUR CLIENT TO MOVE FORWARD TO SEND A NEW SMS.
     * 
     * @param Client $client
     * @param $this
     */

     public function setClient(Client $client){
         $this->client = $client;

         return $this;
     }
}