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

$app->notFound(function() use ($app){
    $app->render('not_found.php');
});

$app->get('/', function () use($app){
    $app->response->headers->set('Content-Type','text/html');
    $app->render('index.html');
});


$app->group('/session', function() use($app){

    $app->get('/login',function() use($app){
        $app->render('login.php');
    });

    $app->post('/',function() use($app){



    });

});

$app->group('/pages',function() use ($app){

    $app->get('/:title',function($title) use ($app) {
        $nice_title = str_replace('-',' ', $title);
        $page = Page::find_by_title($nice_title);
        if($page) {
            $app->render('page.php', array(
                'page' => $page
            ));
        } else {
            $app->render('not_found.php');
        }
    });

    $app->get('/home',function() use($app){
        $app->response->headers->set('Content-Type','text/html');
        $app->render('home.php');
    });

    $app->get('/about',function() use($app){
        $app->response->headers->set('Content-Type','text/html');
        $app->render('about.php');
    });

});


/**
 * Post resources
 */
$app->group('/posts', function () use ($app) {
    $app->response->headers->set('Content-Type', 'text/html');

    $mapper = function ($resource) {
        return $resource->to_array();
    };

    $app->get('/:id', function ($id) use ($app) {
        $post = Post::find($id);
        $app->render('post.php', array(
            'post' => $post
        ));
    });

    $app->get('/', function () use ($app, $mapper) {
        $page = $app->request->params('page');
        $page = !empty($page) ? $page : 1;
        $posts = Post::paginate(array(
           'per_page' => 4,
            'page' => $page
        ));
        $app->render('posts.php',array(
            'posts' => $posts,
            'current_page' => $page,
            'pages' => Post::pages()
        ));
    });

    $app->get('/:id/comments',function($id) use($app, $mapper){
        $post = Post::find($id);
        $comments = array_map($mapper, $post->comments);
        $app->response->setBody(json_encode($comments));
    });

});


/**
 * Comment resources
 */

$app->group('/comments', function () use($app) {

});


$app->run();
?>