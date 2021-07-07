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

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PreviewController;
// use Illuminate\Routing\Route;

// use Illuminate\Routing\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/top', 'PreviewController@Top')->name('top');
Route::get('/price', 'PreviewController@price')->name('price');
Route::get('/project', 'PreviewController@project')->name('project');
Route::get('/Inquiry', 'ContactsController@index')->name('Inquiry');
Route::post('/confirm', 'ContactsController@confirm')->name('confirm');
Route::post('/process', 'ContactsController@process')->name('process');
Route::get('/complete', 'ContactsController@compete')->name('complete');

