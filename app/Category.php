<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:06:03am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Category extends Model
{
	
	
    protected $table = 'categories';

	public function photos()
	{
		return $this->hasMany('App\Photo');
	}

	public function audios()
	{
		return $this->hasMany('App\Audio');
	}

	public function videos()
	{
		return $this->hasMany('App\Video');
	}
}
