<?php
namespace Model;
use Illuminate\Database\Eloquent\Model as Model;
use Traits\FindPageByTitle;
use Traits\UglyTitle;

class Page extends Model {
    use UglyTitle;
    use FindPageByTitle;

    protected $table = 'pages';

    public function user(){
        return $this->belongsTo('Model\User');
    }

    public function toArray(){
        $array = parent::toArray();
        $array['username'] = $this->user->username;
        return $array;
    }

}
?>