<?php
class Base extends ActiveRecord\Model {

    static $options;

    public static function paginate($options){
        self::$options = $options;
        if(!isset(self::$options['per_page'])) {
            self::$options['per_page'] = 10;
        }

        return self::find('all',array(
            'limit' => self::$options['per_page'],
            'offset' => (self::$options['page'] - 1) * self::$options['per_page']

        ));
    }

    public static function pages(){
        return self::count() / self::$options['per_page'];
    }

}
?>