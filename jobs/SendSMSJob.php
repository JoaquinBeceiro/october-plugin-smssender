<?php

namespace Joaquinb\Smssender\Jobs;

use Joaquinb\Smssender\Models\Sms; 
use Illuminate\Http\Request;
use SMSGatewayMe\Client\ApiClient;
use SMSGatewayMe\Client\Configuration;
use SMSGatewayMe\Client\Api\MessageApi;
use SMSGatewayMe\Client\Model\SendMessageRequest;

class SendSMSJob {

    public function fire($job, $data) {

        $access_token   = env('SMS_ACCESS_TOKEN');
        $device_id      = env('SMS_DEVICE_ID');
        $url            = "https://smsgateway.me/api/v4/message/send";

        // Configure client
        $config = Configuration::getDefaultConfiguration();
        $config->setApiKey('Authorization', $access_token);
        $apiClient = new ApiClient($config);
        $messageClient = new MessageApi($apiClient);

        // Sending a SMS Message
        $sendMessageRequest = new SendMessageRequest([
            'phoneNumber' => $data['data']['to'],
            'message' => $data['data']['msg'],
            'deviceId' => $device_id
        ]);

        $sendMessages = $messageClient->sendMessages([
            $sendMessageRequest,
        ]);

        
        if( !empty($sendMessages['status']) ){
            // FAIL
            \Log::error( "Fail to send id:".$data['id'] );

        } else {
            // SENDED
            Sms::find($data['id'])->update(['sended'=>1]);
            $job->delete();
        }

        

        \Log::info( $sendMessages );


    }
}