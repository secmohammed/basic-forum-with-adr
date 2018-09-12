<?php

Route::post('/auth/register', App\Users\Actions\RegisterUserAction::class);
Route::post('/auth/login', App\Users\Actions\LoginUserAction::class);
Route::get('/sections', App\Forum\Actions\IndexSectionAction::class);
Route::group(['middleware' => 'jwt.auth'], function () {
	Route::get('/user', App\Users\Actions\AuthorizedUserAction::class);
	Route::post('/topic', App\Forum\Actions\StoreTopicAction::class);
	Route::post('/topic/{topic}/post', App\Forum\Actions\StorePostAction::class);
});
Route::get('/topic', App\Forum\Actions\IndexTopicAction::class);
Route::get('/topic/{topic}', App\Forum\Actions\ShowTopicAction::class);
