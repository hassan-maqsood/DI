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

Route::get('/', 'HomeController@index');
Route::get('metal-processing/{ids?}', 'MachineController@showMachines')->name('metal-processing');
Route::get('metal-processing', 'MachineController@showMachines');
Route::post('metal-processing', 'MachineController@showMachines');
Route::get('show-machines/{ids}', 'MachineController@showMachines');
Route::get('metal-processing-search', 'MachineController@search')->name('metal-processing-search');
Route::post('mp-post-search', 'MachineController@postSearch');
