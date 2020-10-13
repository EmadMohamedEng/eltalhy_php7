<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';

    public function audios()
    {
    	return $this->hasMany('App\Audio','album_id');
    }
}
