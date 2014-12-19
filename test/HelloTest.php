<?php

class HelloTest extends PHPUnit_Framework_TestCase {

    function testShouldFail(){
        $this->fail('should fail!');
    }

}

?>