<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Video.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:09:56am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Video extends Model
{
	
	
    protected $table = 'videos';

	
	public function category()
	{
		return $this->belongsTo('App\Category','category_id');
	}

	
}
