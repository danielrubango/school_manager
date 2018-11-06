<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $guarded = [];

    public function account() {
    	return $this->morphOne(User::class, 'owner');
    }

    public function children() {
    	return $this->belongsToMany(Student::class);
    }
}
