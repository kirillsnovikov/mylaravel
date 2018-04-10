<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	public function film()
	{
		return $this->hasOne(Film::class);
	}

	public function author()
	{
		return $this->hasOne(User::class);
	}
}
