<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
	public function index() {
		return view('students.index')->with([
			'students' => Student::all()
		]);
	}
}
