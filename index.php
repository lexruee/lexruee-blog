<?php
/**
 * @author Alexander Rüedlinger <a.rueedlinger@gmail.com>
 * @date 19.12.2014
 *
 */

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function(){
    echo 'Hello World!';
});

$app->run();
?>