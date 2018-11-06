<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
	use SoftDeletes;

    protected $guarded = [];

    // protected $dates = ['read_at', 'deleted_at'];

    public function from() {
    	return $this->belongsTo(User::class);
    }

    public function concern() {
    	return $this->belongsTo(Discussion::class);
    }
}
