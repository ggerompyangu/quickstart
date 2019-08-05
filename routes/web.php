<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**
 * display al tasks
 */
Route::get('/', function () {
	return view('tasks');
});

/**
 * Add a new task
 */
Route::post('/task',function(Request $request) {
	$validator = Vaidator::make($request->all(), [
		'name' => 'required|max:255',
	]);

	if ($validator->fails()) {
		return redirect('/')
			->withInput()
			->withErrors($validator);
	}

	// Create the Task...

});

/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {
    //
});