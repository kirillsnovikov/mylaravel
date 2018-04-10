<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
	use Sluggable;
	
	public function films()
	{
		return $this->hasMany(Film::class);
	}
	
	public function sluggable()
	{
		return [
			'link' => [
				'source' => 'title'
			]
		];
	}
}
