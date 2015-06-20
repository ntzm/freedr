<?php

get('/', function()
{
    return view('welcome');
});

Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth',
], function()
{
    get('/', 'DashboardController@index');
    get('find', 'DashboardController@find');
    get('find/projects', 'FindController@projects');
    get('find/freelancers', 'FindController@freelancers');
    get('profile', 'DashboardController@profile');
    get('profile/edit', 'FreelancerController@edit');
    post('profile/edit', 'FreelancerController@update');
    get('profile/{id}', 'FreelancerController@show');
    get('profile/{id}/portfolio', 'FreelancerController@showPortfolio');
    get('profile/{id}/portfolio/add', 'FreelancerController@add');
    post('profile/{id}/portfolio/add', 'FreelancerController@addItem');
    get('projects', 'DashboardController@projects');
    get('projects/create', 'ProjectController@create');
    post('projects/create', 'ProjectController@store');
    get('projects/{id}', 'ProjectController@show');
    get('projects/{id}/edit', 'ProjectController@edit');
    put('projects/{id}/edit', 'ProjectController@update');
    get('matches', 'DashboardController@matches');
});

Route::group(['prefix' => 'auth'], function()
{
    get('login', 'Auth\AuthController@getLogin');
    post('login', 'Auth\AuthController@postLogin');
    get('logout', 'Auth\AuthController@getLogout');
    get('register', 'Auth\AuthController@getRegister');
    post('register', 'Auth\AuthController@postRegister');
});