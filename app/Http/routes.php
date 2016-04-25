<?php

Route::get('/', 'PagesController@index');
Route::get('/details', 'PagesController@details');
Route::get('/news', 'PagesController@news');
Route::get('/oldnews', 'PagesController@oldnews');
Route::get('/recruitment', 'PagesController@recruitment');
Route::get('/offers', 'PagesController@offers');
Route::get('/prices', 'PagesController@prices');
Route::get('/salon', 'PagesController@salon');
Route::get('/team', 'PagesController@team');
Route::get('/team/ashley', 'PagesController@ashley');
Route::get('/team/shell', 'PagesController@shell');
Route::get('/team/leon', 'PagesController@leon');
Route::get('/team/kel', 'PagesController@kel');
Route::get('/team/izzy', 'PagesController@izzy');
Route::get('/team/caleb', 'PagesController@caleb');
Route::get('/team/tash', 'PagesController@tash');
Route::get('/team/jo', 'PagesController@jo');
Route::get('/team/kate', 'PagesController@kate');

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);
  
Route::resource('apprentice', 'ApprenticeController');
Route::resource('stylist', 'StylistController');
  