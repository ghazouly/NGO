<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [];

    public function users(){
    	return $this->belongsTo('App\User', 'author_id');
    }
	
	public function categories(){
    	return $this->belongsToMany('App\Category', 'category_post', 'category_id', 'post_id');
    }


}
