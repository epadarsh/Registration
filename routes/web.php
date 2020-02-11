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
    return view('search-form');
});
Route::post('search-function','SearchController@search')->name('number-search');
Route::post('save-data','NewDataController@store')->name('store-data');
Route::get('show-table','NewDataController@show')->name('show-table');
Route::get('view-data','NewDataController@viewFullData')->name('view-data');

/**
 * Download as CSV File
 */
Route::get('download-csv','NewDataController@downloadCsv')->name('export-csv');

/**
 * Download as Excel File
 */
Route::get('download-excel','NewDataController@downloadExcel')->name('export-excel');
