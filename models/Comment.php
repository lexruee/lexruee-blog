<?php

class Comment extends ActiveRecord\Model {

    static $belongs_to = array(
        array('user'),
        array('post')
    );

    public function username(){
        if(!empty($this->name)){
            return $this->name;
        } else {
            return $this->user->username;
        }
    }

}

?>