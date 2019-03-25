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


/* Index */

Route::get('/', function () {
    return view('pages.index.show');
});

Route::get('index', function () {
    return view('pages.index.show');
})->name('index');


/* General */

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

/* Register */

Route::get('register', function () {
    return view('pages.register.create');
})->name('register');

Route::post('register', 'RegisterController@store')->name('register');


/* Session */

Route::get('login', function () {
    return view('pages.session.create');
})->name('login');

Route::post('login', 'LoginController@check');

Route::get('logout', 'LoginController@logout')->name('logout');


/* User */

Route::get('dashboard', function() {
	if (Auth::user()->isAdmin()) {
		return view('admin.dashboard.show');
	} else {
		return view('user.dashboard.show');
	}
})->name('dashboard');


Route::post('dashboard', 'RegisterController@create');


/* Admin */

Route::get('admin', 'AdminController@index')->name('admin');

Route::get('admin.dashboard', 'AdminController@dashboard');

Route::get('dorms/verify/{id}', 'DormController@verify');


/* Landlord */

Route::get('dorms/show', function () {
	if(!Auth::guest()) {
    	return view('pages.dorms.show');
	} else { return view('errors.unauthorized'); }
})->name('show_dorm');

Route::get('dorms/add', function () {
	if(Auth::user()->isLandlord()) {
    	return view('pages.dorms.create');
	} else { return view('errors.unauthorized'); }
})->name('add_dorm');

Route::post('dorms/add', 'DormController@store');

/* Dorms */

Route::get('dorms/{id}', 'DormController@show');

Route::get('dorms', 'DormController@browse')->name('dorms');

Route::post('dorms/{id}', 'DormController@review');

/* Roommates */

Route::get('roommates/{id}', 'RoommateController@show');

Route::get('roommates', function() {
	return view('pages.roommates.browse');
})->name('roommates');