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
|
*/

Route::get('/', function () {
    return view('front/sections/home/index');
});

Route::get('/services', function () {
    return view('front/sections/services/index');
});

Route::get('/projects', function () {
    return view('front/sections/projects/index');
});

Route::get('/project', function () {
    return view('front/sections/projects/project');
});

Route::get('/news', function () {
    return view('front/sections/news/index');
});

Route::get('/about', function () {
    return view('front/sections/about/index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
