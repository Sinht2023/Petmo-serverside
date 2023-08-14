<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::middleware('auth:api')->group(function () {

    Route::get('/pet-azuke-places', '\App\Http\Controllers\AzukePlaceController@getAllPetAzukePlaces');
    Route::get('/pet-azuke-places/{place_id}', '\App\Http\Controllers\AzukePlaceController@getPetAzukePlace');
    Route::get('/chat', '\App\Http\Controllers\ChatController@fetchMessages');

    //Route::post('/pet-azuke-places', [PetAzukePlaceController::class, 'store']);
    //Route::get('/pet-azuke-places/{id}', [PetAzukePlaceController::class, 'show']);
    //Route::put('/pet-azuke-places/{id}', [PetAzukePlaceController::class, 'update']);
    //Route::delete('/pet-azuke-places/{id}', [PetAzukePlaceController::class, 'destroy']);
});
