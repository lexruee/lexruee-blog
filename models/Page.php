<?php
class Page extends ActiveRecord\Model {
    static $belongs_to = array(
        array('user')
    );

}
?>