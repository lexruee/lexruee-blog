<?php

class Post extends Base {

    static $belongs_to = array(
        array('user')
    );

    static $has_many =  array(
        array('comments')
    );

}

?>