<?php

class User extends ActiveRecord\Model {

    static $crypt_options = array(
        'salt' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'
    );


    public function set_password($password){
        $encrypted_password = password_hash($password,PASSWORD_BCRYPT);
        $this->assign_attribute('password', $encrypted_password, $this::$crypt_options);
    }
}

?>