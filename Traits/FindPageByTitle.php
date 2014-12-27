<?php
namespace Traits;

trait FindByTitle {

    public function uglyTitle(){
        return str_replace(' ','-',$this->title);
    }

    public static function findByTitle($title){
        $nice_title = str_replace('-',' ', ucfirst($title));
        return self::where('title','=', $nice_title)->firstOrFail();
    }
}


?>