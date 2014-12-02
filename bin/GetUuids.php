<?php

require_once __DIR__.'/../vendor/autoload.php';

$client = PhpToolDemo\Client::create();

$response = $client->getUuids();

var_dump($response);