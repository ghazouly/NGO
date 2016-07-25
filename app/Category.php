<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categotries';
    protected $fillable = [];

	public function posts(){
    	return $this->belongsToMany('App\Post', 'category_post', 'post_id', 'category_id');
    }

}
