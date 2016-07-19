<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagories extends Model {

	//catagories table in database
	protected $guarded = [];
	
	public function post()
	{
		return $this->belongsToMany('App\Posts', 'catagories_posts', 'catagories_id', 'posts_id');
	}

}
