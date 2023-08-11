<?php

    require_once 'vendor/autoload.php';

    $basic  = new \Vonage\Client\Credentials\Basic("65815b87", "YlukWcXJhDJKl7M3");
    $client = new \Vonage\Client($basic);

    $response = $client->sms()->send(
        new \Vonage\SMS\Message\SMS("94750919276", 'Nimantha_TEST_API', 'Welcome to Testing API by Nimantha')
    );
    
    $message = $response->current();
    
    if ($message->getStatus() == 0) {
        echo "The message was sent successfully\n";
    } else {
        echo "The message failed with status: " . $message->getStatus() . "\n";
    }


?>