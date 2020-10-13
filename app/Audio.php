<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Audio.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:22:35am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Audio extends Model
{
	
	
    protected $table = 'audio';

    public function category()
    {
    	return $this->belongsTo('App\Category','category_id');
    }

    public function album()
    {
    	return $this->belongsTo('App\Album','album_id');
    }
	
}
