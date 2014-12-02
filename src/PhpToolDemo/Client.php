<?php

namespace PhpToolDemo;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient as ServiceClient;

class Client
{

    public static function create()
    {

        $client = new GuzzleClient();

        $description = new Description(
            [
                'baseUrl'    => 'http://toolboxdemo.com',
                'operations' => [
                    'getUuids'   => [
                        'httpMethod'    => 'GET',
                        'uri'           => '/uuids',
                        'responseModel' => 'response',
                    ],
                    'createUuid' => [
                        'httpMethod'    => 'POST',
                        'uri'           => '/uuids',
                        'responseModel' => 'response',
                    ],
                ],
                'models'     => [
                    'response' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'location' => 'json'
                        ]
                    ]
                ]
            ]
        );

        return new ServiceClient($client, $description);
    }
}