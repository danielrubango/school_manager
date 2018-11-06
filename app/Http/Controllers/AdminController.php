<?php

namespace App\Http\Controllers;

use App\Level;
use App\Agent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function index() {
		return view('admin.index')->with([
			'agents' => Agent::all(),
			'levels' => Level::with('section')->get()
		]);
	}
}
