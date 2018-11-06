<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function account() {
    	return $this->morphOne(User::class, 'owner');
    }

    public function tutor() {
    	return $this->belongsToMany(Tutor::class);
    }

    public function level() {
    	return $this->belongsToMany(Level::class, 'inscriptions')->withTimestamps()->limit(1);
    }
}
