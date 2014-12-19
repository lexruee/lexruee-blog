<?php

class Comment extends ActiveRecord\Model {

    static $belongs_to = array(
        array('user'),
        array('post')
    );

}

?>