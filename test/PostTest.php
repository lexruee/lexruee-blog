<?php

class PostTest extends PHPUnit_Framework_TestCase {

    function testShouldCreatePost(){

        $user = User::first();
        echo $user->firstname;

        $post = new Post(array(
            'title' => 'A post title 4',
            'content' => 'Post content!',
            'user_id' => $user->id
        ));

        assert($post->save());
    }


    function testShouldHaveComments(){
        $post = Post::first();
        assert($post->comments);
    }

}


?>