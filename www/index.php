<?php

require_once 'xhprof/scripts/pre.php';

require_once __DIR__.'/../vendor/autoload.php';

xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

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

        return new Response($response, 201, ['Content: application/json']);
});

$app->get('/uuids', function() use ($app) {

        $uuids = $app['mapper']->getUuids();

        $response = json_encode(["uuids" => $uuids]);

        return new Response($response, 200, ['Content: application/json']);
});

$app->run();

require_once 'xhprof/scripts/post.php';