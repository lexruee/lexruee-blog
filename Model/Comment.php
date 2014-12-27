<?php
namespace Model;
use Illuminate\Database\Eloquent\Model as Model;

class Comment extends Model {

    protected $table = 'comments';

    public function post(){
        return $this->belongsTo('Model\Post');
    }

}

?>