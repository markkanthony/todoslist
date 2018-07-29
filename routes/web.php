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

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as' => 'todos'
]);

Route::get ('/todos/delete/{id}', [
    'uses' => 'TodosController@destroy',
    'as' => 'todo.delete'

]);

Route::get ('/todos/edit/{id}', [
    'uses' => 'TodosController@edit',
    'as' => 'todo.edit'
 
]);

Route::post ('/todos/update/{id}', [
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
 
]);

Route::post ('/todos/create', [
    'uses' => 'TodosController@store',
    'as' => 'todo.store'
]);



Route::get('/todos/complete/{id}',[
    'uses' => 'TodosController@complete',
    'as' => 'todo.complete'
]);