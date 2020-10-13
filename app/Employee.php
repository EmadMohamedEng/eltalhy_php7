<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee.
 *
 * @author  The scaffold-interface created at 2017-04-02 03:11:29pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Employee extends Model
{
	
	
    protected $table = 'employees';

	
	public function job()
	{
		return $this->belongsTo('App\Job','job_id');
	}

	
}
