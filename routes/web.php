<?php

Route::name('questions.')->group(function () {
    Route::get('/', 'QuestionsController@home')->name('home');
    Route::get('/question/{id}', 'QuestionsController@questionDetail')->name('questionDetail');
    Route::post('/question/{id}', 'QuestionsController@answer')->name('answer');
    Route::get('/question/{id}/delete', 'QuestionsController@destroy')->name('destroy');
    Route::get('/question/{id}/{answer_id}/delete', 'QuestionsController@destroyAnswer')->name('destroyAnswer');
    Route::post('/', 'QuestionsController@saveQuestion')->name('save');
});

Route::name('user.')->group(function () {
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/profile/delete', 'UserController@delete')->name('delete');
});

Auth::routes();


