<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/chat', function () {
    return view('chat');
});

Route::post('/api/chat', '\App\Http\Controllers\ChatController@sendMessage')->name('api.chat.send');
Route::get('/chat/{sender_user_id}/{place_id}', '\App\Http\Controllers\ChatController@fetchMessagesFromMe')->name('api.chat.fetch');
Route::get('/pet-azuke-places', '\App\Http\Controllers\AzukePlaceController@getAllPetAzukePlaces')->name('api.petallazukeplaces.fetch');
Route::get('/pet-azuke-places/{place_id}', '\App\Http\Controllers\AzukePlaceController@getPetAzukePlace')->name('getPetAzukePlace');


