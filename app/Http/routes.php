<?php

Route::resource('', 'onePageController');
Route::resource('header', 'headerController');
Route::resource('apresentacao', 'ApresentacaoController');
Route::resource('servico', 'ServicoController');
Route::resource('contato', 'ContatoController');
Route::resource('servicosimg', 'ServicoImgController');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
