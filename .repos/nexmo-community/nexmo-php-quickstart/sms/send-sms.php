<?php
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../vendor/autoload.php';

$basic  = new \Nexmo\Client\Credentials\Basic(NEXMO_API_KEY, NEXMO_API_SECRET);
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => TO_NUMBER,
    'from' => FROM_NUMBER,
    'text' => 'A text message sent using the Nexmo SMS API'
]);

var_dump($message->getResponseData());
