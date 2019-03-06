<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['id', 'user_id','text','file_id','created_at','updated_at'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function file()
    {
    	return $this->belongsTo('App\File');
    }

}
