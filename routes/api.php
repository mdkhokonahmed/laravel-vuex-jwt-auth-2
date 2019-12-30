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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->group(function () {
//     Route::get('members', function () {
//     	return User::all();
//         //return response()->json(['data' => 'Test Data']);
//     });
// });


Route::group([
    'middleware' => 'api',
     'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

   
});

Route::group([
    'middleware' => 'api',
     'prefix' => 'auth/members'
], function ($router) {
 Route::get('allmembers', 'TaskController@allmembers');
});
// Route::middleware('auth:api')->group(function () {
   

// });


// Route::post('login', 'AuthController@login');
// // Route::post('register', 'ApiController@register');

//  Route::group(['middleware' => 'auth.jwt'], function () {
//     Route::get('logout', 'ApiController@logout');

// //      Route::get('tasks', 'TaskController@index');
// //      Route::get('getusername', 'TaskController@getusername');
// //     // Route::get('tasks/{id}', 'TaskController@show');
// //     // Route::post('tasks', 'TaskController@store');
// //     // Route::put('tasks/{id}', 'TaskController@update');
// //     // Route::delete('tasks/{id}', 'TaskController@destroy');
//  });
