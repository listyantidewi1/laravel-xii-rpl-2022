<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

test recording ini high quality
|
*/


// Route::get('/', function () {
//     return view('home.index', []);
// })->name('home.index');


// Route::get('/contact', function () {
//     return view('home.contact', []);
// })->name('home.contact');


Route::view('/', 'home.index')->name('home.index'); //method view utk menyederhanakan route tanpa parameter
Route::view('/contact', 'home.contact')->name('home.contact');

//render view info.blade.php dari dalam folder views/home
Route::view('/info','home.info')->name('home.info');

$posts = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a short intro to Laravel',
        'is_new' => true
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'is_new' => false
    ],
    3 => [
        'title' => 'Intro to ReactJs',
        'content' => 'This is a short intro to ReactJs',
        'is_new' => false
    ]
];

Route::get('/posts', function () use ($posts) {
    return view('posts.index', ['posts' => $posts]);
});

Route::get('/post/{id?}', function ($id) use ($posts) {


    abort_if(!isset($posts[$id]), 404); //helper function

    return view('posts.show', ['post' => $posts[$id]]);
})->name("posts");

Route::get('/days/{id}', function ($id) { //method get untuk route dengan parameter id
    return "Days" . $id;
})->name("days");
