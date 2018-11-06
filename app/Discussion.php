<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $guarded = [];

    public function messages() {
    	return $this->hasMany(Message::class);
    }

    public function participants() {
    	return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function addMessage($message) {
        // dd($this);
        // dd(array_merge($message, ['from_id' => auth()->id()]));

        return $this->messages()->create(
            array_merge($message, ['from_id' => auth()->id()])
        );
    }

    public function forStudents(Level $level) {
        $this->title = 'Eleves - ' .$level->fullName;
        $this->save();

        $this->participants()->attach(auth()->id());

        $this->participants()->attach(
            $level->load('students.account')
                ->students
                    ->pluck('account')
                    ->map(function($a) {
                        return $a->id;
                    })
                    ->all()
        );

        return $this;
    }

    public function forTutor(Student $student) {
        $this->title = 'Tuteur de l\'élève - ' . $student->fullName . '-' .$student->level->fullName;
        $this->save();

        $this->participants()->attach([auth()->id(), $student->account->id]);

        return $this;
    }

    public function forTutors(Level $level) {
        $this->title = 'Responsables élèves - ' .$level->name;
        $this->save();

        $this->participants()->attach(auth()->id());

        $this->participants()->attach(
            $level->load(['students.tutor.account'])
                ->students
                    ->map
                    ->tutor
                        ->flatten()
                        ->map
                        ->account
                            ->map
                            ->id
                            ->all()
        );

        return $this;
    }
}
