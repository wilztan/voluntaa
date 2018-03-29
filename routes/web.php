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

Route::get('/','OtherController@home');

Route::group(['middleware'=>'auth','prefix'=>'user'],function ()
{
	// UserController
	Route::resource('/profile','UserController');
	Route::get('/profile/setPhoto/{id}','OtherController@setPhoto');
	Route::post('/profile/setPhoto/{id}','OtherController@setNewPhoto');

	// Friend Relation
	Route::resource('/friends','RelationController');
	Route::post('/friend/add','RelationController@addNew');
	Route::post('/friends/find','OtherController@search');

	// Setup Company
	Route::resource('/company','CompanyController');
	Route::post('/company/join','CompanyController@joinCompany');
	Route::post('/company/{id}/join','CompanyRolesController@join');
	Route::get('/company/{id}/join-fail','CompanyRolesController@joinfail');
	Route::post('/company/{id}/joined','CompanyRolesController@storeNew');
	Route::resource('/company/roles','CompanyRolesController');

	// Jobs
	Route::resource('/company/jobs','JobsController');
	Route::get('company/{id}/job','JobsController@addJob');
	Route::post('company/{id}/job','JobsController@addJobpost');

	// Jobs Transaction
	Route::resource('/jobs','JobsTransactionController');
});

route::get('jobs','OtherController@jobsSeeAll');
Route::get('{id}/jobs','OtherController@jobsList');

Route::post('search','OtherController@searchJobs');

Auth::routes();

Route::get('/home', 'HomeController@index');
