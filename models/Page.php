<?php
class Page extends ActiveRecord\Model {

    static $belongs_to = array(
        array('user')
    );

    public function ugly_title(){
        return str_replace(' ','-',$this->title);
    }
}
?>