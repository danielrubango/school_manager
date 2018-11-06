<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;

class DiscussionsController extends Controller
{
	public function index(Discussion $discussions) {
		// return $discussions->with(['messages.from', 'participants'])->latest()->get();

		return view('discussions.index', [
			'discussions' => $discussions->with(['messages.from', 'participants'])->get(),
			'discussion' => $discussions->first()
		]);
	}

	public function create() {
		return view('discussions.create', []);
	}

	public function show($id) {
		$discussions = Discussion::with(['messages.from', 'participants'])->latest()->get();
		$discussion = $discussions->find($id);

		// return $discussions->find($id)->messages;

		return view('discussions.index', [
			'discussions' => $discussions,
			'discussion' => $discussion
		]);
	}
}
