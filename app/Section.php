<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Section.
 *
 * @author  The scaffold-interface created at 2017-04-10 09:28:10am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Section extends Model
{
	
	
    protected $table = 'sections';

	
	public function book()
	{
		return $this->belongsTo('App\Book','book_id');
	}

	
}
