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
    return view('welcome');
});


Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

//DataUser
Route::get('/yourData/create', 'DataUserController@create')->name('yourData.create');
Route::post('/yourData/store', 'DataUserController@store')->name('yourData.store'); 

Route::get('/yourData/experience', 'DataUserController@experience')->name('yourData.experience');
Route::post('/yourData/experience', 'DataUserController@insert')->name('yourData.experience'); 
Route::post('/yourData/storeEducational', 'DataUserController@storeEducational')->name('yourData.storeEducational');

Route::post('/yourData/storelang', 'DataUserController@storelang')->name('yourData.storelang'); 
Route::get('/yourData/fetch_lang', 'DataUserController@fetch_lang')->name('yourData.fetch_lang'); 


//register Company
Route::get('/Company/register', 'RegistercompanyController@register')->name('register.register'); 
Route::post('/Company/register', 'RegistercompanyController@createCompany')->name('register.createCompany'); 


