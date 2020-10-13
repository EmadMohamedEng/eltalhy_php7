<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client.
 *
 * @author  The scaffold-interface created at 2017-04-02 02:54:56pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Client extends Model
{
	
	
    protected $table = 'clients';

	
	public function category()
	{
		return $this->belongsTo('App\Category','category_id');
	}

	
}
