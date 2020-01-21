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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
	try {
		DB::connection()->getPdo();
	} catch (\Exception $e) {
		die("Could not connect to the database.  Please check your configuration. error:" . $e );
	}
});

Route::get('/resources/js/{filename}', function($filename){
    $path = resource_path() . '/js/' . $filename;

    if(!File::exists($path)) {
        return response()->json(['message' => 'Image not found.'], 404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/firebase', 'firebase@testfb');