<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


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

Route::post('/students', 'StudentController@index');
Route::post('/student', 'StudentController@store');
Route::get('/student/{id}', 'StudentController@show');
Route::put('/updatestudent/{id}', 'StudentController@update');
Route::delete('/deletestudent/{id}', 'StudentController@destroy');
