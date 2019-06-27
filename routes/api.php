<?php

use Illuminate\Http\Request;

// Ingredient API
Route::get('/ingredients', 'IngredientController@index');
Route::get('/ingredient/{id}', 'IngredientController@show');
Route::post('/ingredient', 'IngredientController@store');
Route::post('/ingredient/{id}', 'IngredientController@update');
Route::delete('/ingredient/{id}', 'IngredientController@destroy');
