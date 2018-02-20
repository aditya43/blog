<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::get('/logout', 'SessionsController@destroy');
Route::post('/login', 'SessionsController@store');

/*+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/

//////////////////////
// Repository Demo  //
//////////////////////

Route::get('/repo', 'RepositoryDemoController@index');

/*+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/

////////////////////////////
// Service Container Demo //
////////////////////////////

/**
 * This entire code of binding will be moved to service provider.
 *
 * To bind a singleton :
 *
 *          App::singleton('Adi\Billing\Stripe', function()
 *          {
 *              //code
 *          });
 */

// App::bind('Adi\Billing\Stripe', function ()
// {
//     return new \Adi\Billing\Stripe(config('services.stripe.secret'));
// });

// $stripe = App::make('Adi\Billing\Stripe'); // Alternative : $stripe = resolve('Adi\SomeClass')

// $stripe->show();

/*+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/

///////////////////////////
// Service Provider Demo //
///////////////////////////

// dd(new AdiTest(config('services.stripe.secret'))); // Stripe class aliased to AdiTest

/*+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+*/
