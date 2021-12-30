<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('register')->group(function(){
    Route::post('email', 'AuthController@registerWithEmail');
});
