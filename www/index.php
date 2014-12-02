<?php

require_once 'xhprof/scripts/pre.php';

require_once __DIR__.'/../vendor/autoload.php';
xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

$app = new Silex\Application();

$app->get('/hello/{name}', function($name) use($app) {
return 'Hello '.$app->escape($name);
});

$app->run();

require_once 'xhprof/scripts/post.php';