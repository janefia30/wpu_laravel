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

//  Route::get('/', function () {
//     return view('hello');
//  });


// Route::get('/','HomeController@index');

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     $nama = 'Jane fria';
//     return view('about',['nama' => $nama]);
// });

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

route::get('/mahasiswa','MahasiswaController@index');
route::get('/students','StudentsController@index');
route::get('/students/create','StudentsController@create');
route::get('/students/{student}','StudentsController@show');

route::post('/students','StudentsController@store');
