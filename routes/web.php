<?php

use Illuminate\Support\Facades\Route;
use App\Models\todolist;
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
    $todolists = todolist::orderBy('created_at','desc')->get();
//    return view('welcome');
    return view('todolist',[
        'todolists'=>$todolists
    ]);
})->name('home');

Route::get('/read/{id}', 'TodolistController@read')->name('read');
Route::get('/create', 'TodolistController@create')->name('create');
Route::post('/create', 'TodolistController@store')->name('store');

Route::get('/update/{id}', 'TodolistController@edit')->name('edit');
Route::post('/update/{id}', 'TodolistController@update')->name('update');

Route::get('/delete/{id}', 'TodolistController@delete')->name('delete');
