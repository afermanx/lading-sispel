<?php

use Illuminate\Support\Facades\Route;


Route::namespace('Site')->group( function(){

    Route::get('/', 'homeController')->name('site.home');

});
