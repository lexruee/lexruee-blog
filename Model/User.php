<?php
namespace Models;
use RedBean_SimpleModel;

class User extends RedBean_SimpleModel {
    use ToJson;

    static $crypt_options = array(
        'salt' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'
    );

    static $has_many = array(
        array('posts'),
        array('comments')
    );


    public function set_password($password){
        $encrypted_password = password_hash($password,PASSWORD_BCRYPT);
        $this->assign_attribute('password', $encrypted_password, $this::$crypt_options);
    }

    public function to_hash(){
        return array(
            'username' => $this->username,
            'email' => $this->email,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname
        );
    }
}

?>