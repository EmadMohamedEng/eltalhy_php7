<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Career.
 *
 * @author  The scaffold-interface created at 2017-04-02 03:23:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Career extends Model
{
	
	
    protected $table = 'careers';

	public function job()
	{
		return $this->belongsTo('App\Job');
	}
}
