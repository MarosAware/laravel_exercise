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


//Those we can call enywhere:

// View => view()
// Request => request()
// App => app()




// Service Container


//App::bind('App\Billing\Stripe', function() {
//   return new App\Billing\Stripe(config('services.stripe.secret'));
//});

////or resolve() or app() or App::make()
//$stripe = app('App\Billing\Stripe');
//
//dd($stripe);




$this->get('/test', 'TestsController@index');


$this->get('/', 'PostsController@index')->name('home');
$this->get('/posts/create', 'PostsController@create');
$this->post('/posts', 'PostsController@store');
$this->get('/posts/{post}', 'PostsController@show');
$this->post('posts/{post}/comments', 'CommentsController@store');

$this->get('/posts/tags/{tag}', 'TagsController@index')->name('home');

$this->get('/register', 'RegistrationController@create');
$this->post('/register', 'RegistrationController@store');

$this->get('/login', 'SessionsController@create')->name('login');
$this->post('/login', 'SessionsController@store');


$this->get('/logout', 'SessionsController@destroy');


//Basic REST

//For example: posts


//View all posts
//GET /posts

//Creating post GET
//GET /posts/create


//Creating posts POST(send)
//POST /posts


//Edit existing post GET
//GET /posts/{id}/edit

//Edit existing post PATCH/PUT
//PATCH /posts/{id}

//Show specific post GET (notice that uri is the same for patch)
//GET /posts/{id}

//Delete will be the same as POST edit
//DELETE /posts/{id}




//controller => PostsController, Eloquent model => Post, migration => create_posts_table

$this->get('/tasks', 'TasksController@index');
$this->get('/task/{task}', 'TasksController@show');



