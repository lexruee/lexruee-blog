<?php
/**
 * @author Alexander Rüedlinger <a.rueedlinger@gmail.com>
 * @date 19.12.2014
 *
 */

require 'config.php';

$app = new \Slim\Slim(array(
    'debug' => true
));

$app->get('/', function () use($app){
    $app->response->header('Content-Type','text/html');
    $app->render('index.html');
});

/**
 * Session resource
 */
$app->group('/session', function() use($app){

    $app->get('/login',function() use($app){

    });

    $app->post('/',function() use($app){

    });
});


/**
 * Page resource
 */
$app->group('/pages',function() use ($app){

    $app->get('/:title',function($title) use ($app) {
        $app->response->header('Content-Type', 'application/json');
        $page = Model\Page::findByTitle($title);
        if($page) {
            echo $page->toJson();
        } else {
            echo json_encode(array(
                'title' => 'Not found!',
                'content' => 'Not found!'
            ));
        }
    });

});


/**
 * Post resource
 */
$app->group('/posts', function () use ($app) {

    $mapper = function ($resource) {
        return $resource;
    };

    $app->get('/:date/:id', function ($date, $title) use ($app) {
        $app->response->header('Content-Type', 'application/json');
        $post = Model\Post::findByDateAndTitle($date, $title);
        echo $post->toJson();
    });

    $app->get('/', function () use ($app, $mapper) {
        $app->response->header('Content-Type', 'application/json');
        echo Model\Post::all()->toJson();
    });
});


/**
 * Comment resource
 */

$app->group('/comments', function () use($app) {

});


$app->run();
?>