<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sendSmsNotification()
    {
        $basic  = new \Vonage\Client\Credentials\Basic(config('app.nexmo_api_key'), config('app.nexmo_api_secret'));
        $client = new \Vonage\Client($basic);

        $from = config('app.nexmo_number');
        $to = '543425296009';
        $message = 'A text message sent using the Nexmo SMS API';

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($to, $from, $message)
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
