<?php
namespace Models;
use RedBean_SimpleModel;

class Comment extends RedBean_SimpleModel {
    use ToJson;

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