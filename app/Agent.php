<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $guarder = [];

    public function account() {
    	return $this->morphOne(User::class, 'owner');
    }
}
