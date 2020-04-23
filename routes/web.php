<?php

// use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     $name = request('name');
//      return view('test', [
//          'name' => $name
//     ]);
// });
//         Route::get('test', function() {
//             return view('test');
//         });

// Route::get('/contact', function () {
//     return view('contact');
// });

// loads welcome/basic content
Route::get('/', function () {
    return view('welcome2');
});

Route::get('/about', function () { 
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
// Route::get('/articles/{article}/edit', 'ArticlesController@edit');

// Route::get('/articles', function () {
//     return view('articles', [
//         'articles' => App\Article::all()
//     ]);
// });

// Route::get('/post/{post}', function () {
//     //
// })->name('post.show');
// echo route('post.show', ['post' => 1]);

// passing info through url
// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'First Post',
//         'my-second-post' => 'second post'
//     ];
    
//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, not found');
//     }

//     return view('post', [
//          'post' => $posts[$post] 
//     ]);
//  });

//  using controller
// Route::get('/posts/{post}', 'PostsController@show'); 