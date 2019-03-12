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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('shares', 'ShareController');

//Route::get('/users', 'UserController@index')->name('shares.index');

/* Resource auto route names
Verb          Path                      Action      Route Name
------------------------------------------------------------------------------------
GET           /shares                   index       shares.index
GET           /shares/create            create      shares.create
POST          /shares                   store       shares.store
GET           /shares/{share}           show        shares.show
GET           /shares/{share}/edit      edit        shares.edit
PUT|PATCH     /shares/{share}           update      shares.update
DELETE        /shares/{share}           destroy     shares.destroy
*/