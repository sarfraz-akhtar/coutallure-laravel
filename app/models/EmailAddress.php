<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailAddress extends Model {

    protected $table = 'emailaddresses';
     protected $fillable = array('email');
    protected $guarded = array('id');
}
