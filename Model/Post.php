<?php
namespace Models;
use RedBean_SimpleModel;

class Post extends RedBean_SimpleModel {
    use ToJson;

    static $belongs_to = array(
        array('user')
    );

    static $has_many =  array(
        array('comments')
    );

    public function ugly_title(){
        return str_replace(' ','-',$this->title);
    }

    public function to_hash(){
        return array(
            'title' => $this->title,
            'ugly_title' => $this->ugly_title(),
            'content' => $this->content,
            'username' => $this->user->username
        );
    }
}

?>