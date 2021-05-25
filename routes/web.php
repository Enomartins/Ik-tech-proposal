<?php
use App\Http\Controllers\MachineController;

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

Route::get('/', 'MachineController@index');
// Route::post('/search', 'MachineController@search');
// Route::get('/search/{brand}', 'MachineController@brand');
Route::get('/admin', [MachineController::class, 'admin'])->name('admin');
Route::get('/search/{param}', [MachineController::class, 'param']);
Route::post('/search', [MachineController::class, 'searching']);
