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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('user', 'UserController');
Route::group(['middleware' => 'auth'], function () {
    Route::get('user/edit', 'UserController@edit')->name('user.edit');
    Route::post('user/edit/picture', 'UserController@update_avatar')->name('user.tof');
    Route::put('user', 'UserController@update')->name('user.update');
    Route::get('doctors', 'doctors@index')->name('doctors');
    Route::put('user/edit/contact', 'UserController@contact')->name('user.contact');
    Route::put('user/edit/address', 'UserController@address')->name('user.address');
});
Route::get('user/{username}', 'UserController@show')->name('user.show');
Route::get('/homePage', 'PagesController@HomePage')->name('Home');
Route::get('/contact_us', 'PagesController@contact_us')->name('contact_us');
Route::get('/packages', 'PagesController@packages')->name('packages');
Route::get('/payement', 'PagesController@payement')->name('payement');
Route::get('/drop', 'AdminPagesController@drop')->name('user.drop');
Route::get('/Admin_Doc', 'AdminPagesController@Doctors')->name('DocController');