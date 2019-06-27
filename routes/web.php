<?php

// Pages Controller
Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about');
Route::get('/menu', 'PagesController@menu');

// Registration Controller
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// Login Controller
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

// Dashboard 
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');

Route::get('/{any}', function(){
  return view('/dashboard');
})->where('any', '.*')->middleware('auth');

// If wrong url return 
// Route::any('{query}',
//   function() { return redirect('/'); })
//   ->where('query', '.*');

