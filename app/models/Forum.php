<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model {

    protected $table = 'forums';
    protected $fillable  = array('name','description','author_id');
    public function forum_posts()
    {
        return $this->hasMany('App\Models\Forum_Post');
    }

}
