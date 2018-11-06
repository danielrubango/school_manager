<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $guarded = [];

	public function levels() {
		return $this->hasMany(Level::class);
	}
}
