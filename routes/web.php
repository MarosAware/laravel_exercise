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


//$this->get('/', function () {
//    return view('welcome', ['name' => 'Stasiek']);
//});
//
//
//$this->get('/about', function() {
//    return view('about')->with('name', 'takbylo');
//});


$this->get('/', 'PostsController@index');
$this->get('/posts/{post}', 'PostsController@show');
//controller => PostsController, Eloquent model => Post, migration => create_posts_table

$this->get('/tasks', 'TasksController@index');
$this->get('/task/{task}', 'TasksController@show');



