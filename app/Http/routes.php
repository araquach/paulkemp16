<?php




Route::get('/', 'PagesController@index');
Route::get('/details', 'PagesController@details');
Route::get('/news', 'PagesController@news');
Route::get('/oldnews', 'PagesController@oldnews');
Route::get('/recruitment', 'PagesController@recruitment');
Route::get('/men', 'PagesController@men');
Route::get('/offers', 'PagesController@offers');
Route::get('/prices', 'PagesController@prices');
Route::get('/apprenticeprices', 'PagesController@apprenticePrices');
Route::get('/salon', 'PagesController@salon');
Route::get('/kebelo', 'PagesController@kebelo');
Route::get('/team', 'PagesController@team');
Route::get('/newstaff', 'PagesController@newstaff');
Route::get('/ashley', 'PagesController@ashley');
Route::get('/michelle', 'PagesController@michelle');
Route::get('/leon', 'PagesController@leon');
Route::get('/kel', 'PagesController@kel');
Route::get('/izzy', 'PagesController@izzy');
Route::get('/caleb', 'PagesController@caleb');
Route::get('/tash', 'PagesController@tash');
Route::get('/jo', 'PagesController@jo');
Route::get('/kate', 'PagesController@kate');
Route::get('/louise', 'PagesController@louise');

Route::get('/admin', 'AdminController@index');


Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('sendEmail', 
  ['as' => 'sendEmail', 'uses' => 'ContactController@sendEmail']);



  
Route::resource('apprentice', 'ApprenticeController');
Route::resource('stylist', 'StylistController');

Route::get('feedback/{client}',
  ['as' => 'feedbackCreate', 'uses' => 'FeedbackController@create']);
Route::post('feedback/store',
  ['uses' => 'FeedbackController@store']);
  
Route::get('offer/{client}',
  ['uses' => 'OfferController@show']);
Route::get('offer2/{client}',
  ['uses' => 'OfferController@show2']);
Route::patch('offer/{client}',
  ['as' => 'offerUpdate', 'uses' => 'OfferController@update']);
  
Route::auth();