<?php
namespace Model;
use Illuminate\Database\Eloquent\Model as Model;
use Traits\CreatedAt;
use Traits\FindPostByDateAndTitle;
use Traits\UglyTitle;

class Post extends Model {
    use UglyTitle;
    use FindPostByDateAndTitle;
    use CreatedAt;

    protected $table = 'posts';

    public function user(){
        return $this->belongsTo('Model\User');
    }


    public function comments(){
        return $this->hasMany('Model\Comment');
    }


    public function toArray(){
        $array = parent::toArray();
        $array['username'] = $this->user->username;
        $array['comments_count'] = $this->comments()->count();
        $array['ugly_title'] = $this->uglyTitle();
        return $array;
    }

}

Post::creating(function($post){
    $post->date = date("Y-m-d");
})

?>