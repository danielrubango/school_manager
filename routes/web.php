<?php

Route::get('/', function () {
	return redirect()->route('admin.index');
    // return view('welcome');
})->name('home');

Route::middleware('auth')->group(function() {
	Route::prefix('admin')->group(function () {
		Route::get('/', 'AdminController@index')->name('admin.index');

		Route::get('students', 'StudentsController@index')->name('students.index');
		Route::get('levels', 'LevelsController@index')->name('levels.index');

		// Create a students' discussion
		Route::get('discussions/students/create', 'StudentsController@create')->name('discussions.students.create');

		// Create a classes' discussion
		Route::post('discussions/levels/{level}/create', 'LevelsController@create')->name("discussions.levels.create");

		Route::get('sections', function () {});

		Route::get('users', function () {});
	});

	// Discussions
	Route::get('discussions', 'DiscussionsController@index')->name('discussions');
	Route::post('discussions', 'DiscussionsController@store')->name('discussions.store');
	Route::get('discussions/{discussion}', 'DiscussionsController@show')->name('discussions.show');

	// Create a message
	Route::post('discussions/{discussion}/messages', 'MessagesController@store')->name('messages.store');

	Route::view('profile', 'profiles.edit')->name('profile');

	Route::get('settings', function () {})->name('settings');
});

Route::get('test', function () {
	// Authorisation details.
	$username = "danielrubango@gmail.com";
	$hash = "89a85b5f9c1d2c73778706a63ff069c72e60f40d087e69797f540fd6d500c12e";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "RUBANGO APP"; // This is who the message appears to be from.
	$numbers = "243903726598"; // A single number or a comma-seperated list of numbers
	$message = "Testing.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);

	dd($result);
});


Auth::routes();
