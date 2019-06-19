<?php

// Pages Controller
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/menu', 'PagesController@menu');

// Registration Controller
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// Login Controller
Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

// Dashboard 
Route::get('/dashboard', function(){
  return view('dashboard');
});

