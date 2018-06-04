<?php

require_once './includes/app_top.php';

session_start();

$app = new \Slim\Slim([
    'templates.path' => './frontend/build'
]);

class CatchAllMiddleware extends \Slim\Middleware
{
    public function call()
    {
        $app = $this->app;
				$file = 'index.html';
				$app->render($file, [], 200);
    }
}
//$app->add(new \CatchAllMiddleware());

$app->get('/', function () use ($app) {
    $app->render('index.html', [], 200);
});

$app->get('/:path', function($path = null) use ($app) {
    $app->render('index.html', [], 200);
})->conditions([ 'path' => '.*' ]);

$app->notFound (function () use ($app) {
		$file = 'index.html';
    $app->render($file, [], 200);
});

$app->run();
