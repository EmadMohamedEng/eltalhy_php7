<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Job.
 *
 * @author  The scaffold-interface created at 2017-04-02 03:10:02pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Job extends Model
{
	
	
    protected $table = 'jobs';

    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
