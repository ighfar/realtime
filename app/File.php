<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
        protected $table = 'file';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'messages_id',
        'title',
        'file_id'
    ];
    
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
}
