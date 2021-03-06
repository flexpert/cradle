<?php

use App\Controllers\Api\Home;
use App\Middleware\CORSMiddleware;
use Slim\Routing\RouteCollectorProxy;

/**
 * Routing rules are defined here.
 */

$app->group('/api/v0', function (RouteCollectorProxy $group) {
    $group->any('', Home::class.':index');
})->add(new CORSMiddleware);
