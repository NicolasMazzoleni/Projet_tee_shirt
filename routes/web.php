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

Route::resource('generateimage', 'GenerateController');

Route::get('/', 'HomeController@index')->name("home");

Route::post('/resultat', 'DisplayImageController@create')->name("resultatFusion");

Route::get('/fusion/{tshirt}/{logo}', 'GenerateController@index')->name("fusion");

Route::post('/save/{tshirt}/{logo}', 'GenerateController@store')->name('saveResultat');

Route::get('/delete/{logo}', 'GenerateController@destroy')->name('deleteUpload');

Route::post('/upload', 'UploadFileController@store')->name('saveUpload');

Route::get('/edit/{tshirt}/{logo}', 'CreationController@edit')->name('EditCreation');

Route::get('/creations', 'CreationController@index')->name('ShowCreations');

Route::get('/generatePDF', 'CreationController@create')->name('CreatePDF');

Route::get('/send', 'EmailController@send');


