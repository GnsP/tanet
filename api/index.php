<?php

require_once '../includes/app_top.php';

session_start();

$app = new \Slim\Slim();

$app->get('/user/:user_id', function ($user_id) use ($app) {
    $response = \tanet\User::getUserById($user_id);
    $app->response->setStatus(200);
    $app->response->setBody($response);
});

$app->post('/user/register', function() use ($app) {
    $response = \tanet\User::registerNewUser($app->request->post());

    $app->response->setStatus(200);
    $app->response->setBody($response);
});

$app->notFound (function () use ($app) {
    $app->response->setStatus(404);
    $app->response->setBody('Not Found:'.$path);
});

$app->run();
