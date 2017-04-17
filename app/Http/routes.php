<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MyControllers@index');

Route::get('home', 'MyControllers@index');

Route::get('done', 'MyControllers@done');

Route::get('doing', 'MyControllers@doing');

Route::get('all', 'MyControllers@all');

Route::get('to-do', 'MyControllers@todo');

Route::get('Done', 'MyControllers@done2');

Route::get('Doing', 'MyControllers@doing2');

Route::get('index', 'MyControllers@index');

Route::get('tracking', 'MyControllers@tracking');

Route::get('create', 'MyControllers@create');

Route::get('meeting', 'MyControllers@meeting');

Route::get('task', 'MyControllers@task');

Route::get('stat', 'MyControllers@stat');

Route::get('user', 'MyControllers@user');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/PALM/public', 'WelcomeController@index');

Route::get('/PALM/test' , function(){
	return view('Test.test');
});

Route::get('/PALM/testt' , function(){
	return view('Test.test2');
});

Route::get('/PALM/testtt' , function(){
	return view('Test.test3');
});

Route::get('/PALM/test2' , function(){
	return view('Test.work');
});

Route::get('/PALM/todo', function() {
	return view('Test.task-to-do');
});

Route::get('check-connect',function(){
 if(DB::connection()->getDatabaseName())
 {
 return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
 }else{
 return 'Connection False !!';
 }
 
});