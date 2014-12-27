<?php
namespace Model;
use Illuminate\Database\Eloquent\Model as Model;

class User extends Model {

    protected $hidden = array('password');

    static $crypt_options = array(
        'salt' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709'
    );

    protected $table = 'users';

    public function posts(){
        return $this->hasMany('Model\Post');
    }

    public function pages(){
        return $this->hasMany('Model\Page');
    }

    public function setPasswordAttribute($password){
        $encrypted_password = password_hash($password, PASSWORD_BCRYPT, self::$crypt_options);
        $this->attributes['password'] = $encrypted_password;
    }
}

?>