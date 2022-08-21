<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Todo;
use App\Http\Controllers\TodoController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('todos', 'TodoController@index');
// Route::get('todos/{todo}', 'TodoController@show');
// Route::post('todos', 'TodoController@store');
// Route::put('todos/{todo}', 'TodoController@update');
// Route::delete('todos/{todo}', 'TodoController@delete');
Route::resource('todos', TodoController::class);
