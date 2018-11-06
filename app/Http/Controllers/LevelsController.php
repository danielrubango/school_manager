<?php

namespace App\Http\Controllers;

use App\Level;
use App\Discussion;
use Illuminate\Http\Request;

class LevelsController extends Controller
{
	public function create(Level $level, Request $request) {
		$discussion = (new Discussion())->forTutors($level);

		return redirect('discussions/' . $discussion->id);
	}
}
