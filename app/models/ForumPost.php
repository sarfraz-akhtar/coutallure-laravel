<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model {
    protected $table = 'forum_posts';
    protected $fillable  = array('name','description','author_id','forum_id');
    public function forum()
    {
        return $this->belongsTo('App\Models\Forum');
    }

}
