<?php

Route::name('questions.')->group(function () {
    Route::get('/', 'QuestionsController@home')->name('home');
    Route::get('/question/{id}', 'QuestionsController@questionDetail')->name('questionDetail');
    Route::post('/question/{id}/answer', 'QuestionsController@answer')->name('answer');
    Route::delete('/question/{id}/delete', 'QuestionsController@destroy')->name('destroy');
    Route::post('/', 'QuestionsController@saveQuestion')->name('save');
});

Auth::routes();
