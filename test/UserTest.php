<?php

class UserTest extends PHPUnit_Framework_TestCase {

    function testShouldCreateUser(){
        $user = new User(array(
           'username' => 'lexruee'. mt_rand().'.'.mt_rand(),
            'email' => 'a.rueedlinger@gmail.com',
            'password' => 'test',
            'firstname' => 'Alexander',
            'lastname' => 'Rueedlinger'
        ));
        $this->assertNotEquals($user->password,'test');
        assert($user->save());
    }

    function testShouldEncryptPassword(){
        $user = new User(array(
            'username' => 'lexruee'. mt_rand().'.'.mt_rand(),
            'email' => 'a.rueedlinger@gmail.com',
            'password' => 'test',
            'firstname' => 'Alexander',
            'lastname' => 'Rueedlinger'
        ));
        $this->assertNotNull($user->password);
        $this->assertNotEquals($user->password,'test');
    }

    function testShouldHavePosts(){
        $user = User::first();
        $this->assertNotNull($user->posts);
    }
}

?>