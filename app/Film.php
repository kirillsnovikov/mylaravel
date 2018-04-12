<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Film extends Model
{
	use Sluggable;

	public function category()
	{
		return $this->hasOne(Category::class);
	}

	public function author()
	{
		return $this->hasOne(User::class);
	}

	public function tags()
	{
		return $this->belongsToMany(
			Tag::class,
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
