<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/pet-azuke-places', '\App\Http\Controllers\AzukePlaceController@getAllPetAzukePlaces');
Route::get('/pet-azuke-places/{place_id}', '\App\Http\Controllers\AzukePlaceController@getPetAzukePlace');
Route::post('/api/chat', '\App\Http\Controllers\ChatController@sendMessage')->name('api.chat.send');
Route::get('/chat', '\App\Http\Controllers\ChatController@sendMessage')->name('api.chat.send');
Route::get('/chat/{user_id}', '\App\Http\Controllers\ChatController@fetchMessages');
