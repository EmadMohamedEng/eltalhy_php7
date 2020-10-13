<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Photo.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:08:37am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Photo extends Model
{
	
	
    protected $table = 'photos';

	
	public function category()
	{
		return $this->belongsTo('App\Category','category_id');
	}

	
}
