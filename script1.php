<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
//echo $response->getStatusCode(); # 200
//echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
//echo $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'

# Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://easteregg.wildcodeschool.fr/api/eggs');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo $response->getBody();
});

$promise->wait();

