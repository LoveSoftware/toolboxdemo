<?php

require_once 'xhprof/scripts/pre.php';

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;
use Rhumsaa\Uuid\Uuid;
use PhpToolDemo\Mapper;

$app = new Silex\Application();
$app['debug'] = true;

$app['mapper'] = function() {
    return $mapper = new Mapper("/tmp/important-uids.txt");
};

// A very simple set of example endpoints which generate or retrieve UUIDs using a library.
// UUIDs are persisted to and retrieved from a file via a simple file mapper.

$app->post('/uuids', function() use($app) {

        $uuid = Uuid::uuid4()->toString();

        $app['mapper']->saveUuid($uuid);

        $response = json_encode(["uuid" => $uuid]);

        //$response = json_encode([]);

        return new Response($response, 201, ['Content: application/json']);
});

$app->get('/uuids', function() use ($app) {

        $uuids = $app['mapper']->getUuids();

        $response = json_encode(["uuids" => $uuids]);

        //$response = json_encode([]);

        return new Response($response, 200, ['Content: application/json']);
});

$app->get('/xdebug', function() use ($app) {

        // Terrible use of the @ operator
        ini_set("display_errors", 1);
        //ini_set("xdebug.scream", 1);
        fopen("blah blah bla", "r");
        //@fopen("blah blah bla", "r");


        ini_set('html_errors', false);
        var_dump($_SERVER);

        return new Response();
});

$app->run();

require_once 'xhprof/scripts/post.php';