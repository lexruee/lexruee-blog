<?php

class CommentTest extends PHPUnit_Framework_TestCase {

    function testShouldCreateAnonUserComment(){
        $post = Post::first();
        $comment = new Comment(array(
            'title' => 'A comment title',
            'content' => 'Comment content!',
            'email' => 'test@test.com',
            'name' => 'Peter Mueller',
            'post_id' => $post->id
        ));

        assert($comment->save());
    }

    function testShouldCreateUserComment(){
        $post = Post::first();
        $user = User::first();
        $comment = new Comment(array(
            'title' => 'A comment title',
            'content' => 'Comment content!',
            'post_id' => $post->id,
            'user_id' => $user->id
        ));

        assert($comment->save());
    }

}

?>