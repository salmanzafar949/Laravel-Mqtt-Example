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
}
