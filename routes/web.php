<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicAddRemoveFieldController;

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

// Route::get('add-remove-multiple-input-fields', 'DynamicAddRemoveFieldController@index');
// Route::post('add-remove-multiple-input-fields', 'DynamicAddRemoveFieldController@store');


Route::get('add-remove-multiple-input-fields',  [App\Http\Controllers\DynamicAddRemoveFieldController::class, 'index']);
Route::post('add-remove-multiple-input-fields',  [App\Http\Controllers\DynamicAddRemoveFieldController::class, 'store']);
