<?php
namespace Models;
use RedBean_SimpleModel;

class Page extends RedBean_SimpleModel {


    static $belongs_to = array(
        array('user')
    );

    public function ugly_title(){
        return str_replace(' ','-',$this->title);
    }

    public function to_hash(){
        return array(
            'title' => $this->title,
            'content' => $this->content,
            'username' => $this->user->username
        );
    }
}
?>