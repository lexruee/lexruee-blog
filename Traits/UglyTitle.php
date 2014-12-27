<?php
namespace Traits;

trait UglyTitle {

    public function uglyTitle(){
        return str_replace(' ','-',$this->title);
    }
}

?>