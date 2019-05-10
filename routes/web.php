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

Auth::routes();

Route::get('/', function () {
    return redirect(Route('todolists'));
})->name('root');

Route::get('/todolists/overview', 'TodolistController@overview')->name('todolists');
Route::get('/todolists/all', 'TodolistController@all')->name('alltodolists');
Route::get('/todolist', 'TodolistController@todolist')->name('todolist');
Route::get('/todolist/create', function () {
    return view('todolists.create');
})->name('newtodolist');
Route::get('/todolist/edit', 'TodolistController@edit')->name('edittodolist');
Route::get('/todolist/delete', 'TodolistController@delete')->name('deletetodolist');

Route::post('/todolist', 'TodolistController@create')->name('createtodolist');
Route::post('/todolist/update', 'TodolistController@save')->name('savetodolist');

Route::get('/note', 'NoteController@note')->name('note');
Route::get('/note/create', 'NoteController@new')->name('newnote');
Route::get('/note/complete', 'NoteController@complete')->name('completenote');
Route::get('/note/edit', 'NoteController@edit')->name('editnote');
Route::get('/note/delete', 'NoteController@delete')->name('deletenote');

Route::post('/note', 'NoteController@create')->name('createnote');
Route::post('/note/update', 'NoteController@save')->name('savenote');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
