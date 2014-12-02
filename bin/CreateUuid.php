<?php

require_once __DIR__.'/../vendor/autoload.php';

$client = PhpToolDemo\Client::create();

$response = $client->createUuid();

var_dump($response);
