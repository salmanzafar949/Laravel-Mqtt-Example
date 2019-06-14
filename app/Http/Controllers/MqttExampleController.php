<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mqtt;

class MqttExampleController extends Controller
{

    // publishing topic

    public function SendMsgViaMqtt($topic, $message)
    {
        $output = Mqtt::ConnectAndPublish($topic, $message);

        if ($output === true)
        {
            return true;
        }

        return false;
    }

    //subscribing topic

    public function SubscribetoTopic($topic)
    {
        Mqtt::ConnectAndSubscribe($topic, function($topic, $msg){
            echo "Msg Received: \n";
            echo "Topic: {$topic}\n\n";
            echo "\t$msg\n\n";
        });
    }
}
