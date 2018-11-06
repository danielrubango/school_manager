<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = [];
    protected $hidden = ['password'];

    public function owner() {
        return $this->morphTo();
    }

    public function roles() {
    	return $this->belongsToMany(Role::class);
    }

    public function getFullNameAttribute() {
    	return "$this->first_name $this->last_name";
    }
}
