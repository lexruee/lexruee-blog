<?php
namespace Traits;

trait FindPageByTitle {

    public static function findByTitle($title){
        $nice_title = str_replace('-',' ', ucfirst($title));
        return self::where('title','=', $nice_title)->firstOrFail();
    }
}


?>