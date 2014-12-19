<?php

class PostTest extends PHPUnit_Framework_TestCase {

    function testShouldCreatePost(){

        $user = User::first();
        echo $user->firstname;

        Post::create(array(
            'title' => 'A post title',
            'content' => 'Post content!',
            'user_id' => $user->id
        ));

    }

}


?>