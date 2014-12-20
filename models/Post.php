<?php

class Post extends Base {

    static $belongs_to = array(
        array('user')
    );

    static $has_many =  array(
        array('comments')
    );

    public function ugly_title(){
        return str_replace(' ','-',$this->title);
    }

}

?>