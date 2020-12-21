<?php


Route::get('/', 'MainController@index');

Route::get('/one_book/{id}', 'MainController@oneBook');


Route::get('/create', 'MainController@create');

Route::get('/edit/{id}', 'MainController@edit');

Route::post('/store', 'MainController@store');

Route::post('/update/{id}', 'MainController@update');

Route::get('/delete/{id}', 'MainController@delete');



    Route::get('/register', 'UserController@createRegister')->name('register.create');
    Route::post('/register', 'UserController@storeRegister')->name('register.store');

    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');


Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');

Route::get('/admin', 'Admin\AdminController@admin')->middleware('admin')->name('admin');
