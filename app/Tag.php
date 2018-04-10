<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
	use Sluggable;
	
    public function films()
	{
		return $this->belongsToMany(
			Film::class,
			'film_tags',
			'film_id',
			'tag_id'
		);
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
