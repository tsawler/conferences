<?php

Route::get('/', 'ConferenceRegistrationController@getRegistrationform');
Route::post('/register', 'ConferenceRegistrationController@postRegistrationform');

Route::post('/queue/push', function(){
    return Queue::marshal();
});



Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
