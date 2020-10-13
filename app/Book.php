<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:26:52am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Book extends Model
{
	
	
    protected $table = 'books';

	public function sections()
	{
		return $this->hasMany('App\Section');
	}

	public function photos()
	{
		return $this->hasMany('App\BookPhoto');
	}
}
