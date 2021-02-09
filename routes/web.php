<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
// home
Route::post('/', 'HomeController@update')->name('root');


Route::get('/success', 'CartController@success')->name('success');

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

// blog
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/cari', 'BlogController@cari')->name('cari');
Route::get('/detail-blog/{id}', 'BlogController@detail')->name('detail-blog');

Route::get('/blogcategories', 'BlogcategoryController@index')->name('blogcategories');
Route::get('/blogcategories/cari', 'BlogcategoryController@cari')->name('cari');
Route::get('/blogcategories/{id}', 'BlogcategoryController@detail')->name('blogcategories-detail');


// Registrasi email
Route::view('verifikasi-email', 'email')->middleware('verified');

Route::group(['middleware' => ['auth']], function(){

// Ganti Password
    Route::get('password', 'PasswordController@edit')
        ->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')
        ->name('user.password.update');


});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('suport', 'SuportController');
        Route::resource('portfolio', 'PortfolioController');
        Route::resource('team', 'TeamController');
        Route::resource('user', 'UserController');
        Route::resource('blogcategory','BlogcategoryController');
        Route::resource('blog','BlogController');
    });

// Auth::routes();

