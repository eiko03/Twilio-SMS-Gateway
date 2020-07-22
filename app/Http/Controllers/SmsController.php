<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Http\RedirectResponse;

class sms extends Controller
{
    //
    public function smssend(Request $request){
            // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md
    require_once '../vendor/autoload.php';



    // Find your Account Sid and Auth Token at twilio.com/console
    // DANGER! This is insecure. See http://twil.io/secure

    $sid = env("TWILIO_ACCOUNT_SID");
    $token = env("TWILIO_AUTH_TOKEN");
    $number=env("TWILIO_NUMBER");
    $client="+88".$request->number; //change country code
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
                    ->create($client, // to
                            [
                                "body" => $request->message,
                                "from" => $number
                            ]
                    );

    //print($message->sid);
    return redirect('/sms')->withSuccess('Message sent');
        }

}
