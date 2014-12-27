<?php
namespace Traits;

trait FindPostByDateAndTitle {

    public static function findByDateAndTitle($date, $title){
        $nice_title = str_replace('-',' ', $title);
        return self::where('date','=',$date)
            ->where('title','=', $nice_title)
            ->firstOrFail();
    }

}