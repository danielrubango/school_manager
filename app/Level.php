<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $guarded = [];

    public function section() {
    	return $this->belongsTo(Section::class);
    }

    public function students() {
    	return $this->belongsToMany(Student::class, 'inscriptions')->withTimestamps();
    }

    public function getFullNameAttribute() {
    	return "{$this->name} {$this->section->name}";
    }
}
