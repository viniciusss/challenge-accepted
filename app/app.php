<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__ . '/providers.php';

$app->get('/', function () use ($app) {
    return 'Hello world';
});

$app->run();