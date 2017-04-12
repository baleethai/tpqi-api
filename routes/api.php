<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('news', function(Request $request) {

	if( $request->has('page') && !is_numeric($request->get('page')) ) {
		return response()->json(["status" => "fail"]);
	}

	if( $request->has('category_id') ) {
		$cats = explode(',', $request->get('category_id'));
		return \App\News::whereIn('category_id', $cats)->paginate(10);
	}

	return \App\News::paginate(10);
	
});

Route::get('categories', function(Request $request) {
	return \App\Category::paginate(10);
});
