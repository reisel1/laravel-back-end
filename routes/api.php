<?php

use Illuminate\Http\Request;
use App\User as User;
//use App\Http\Controllers\UserController as UserController;

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

//Route::get('/users', 'UserController@getAll');
Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');

// Route::group(['middleware' => ['auth:api']], function () {
//     get('/user', function (Request $request) { return $request->user();});
// });
Route::get('/a', function(){echo "hello";});
Route::post('/a', 'UserController@tmp');//d'ont work
Route::resource('users', 'UserResourceController');
Route::resource('roles', 'RolesController');
Route::resource('permissions', 'PermissionsController');
