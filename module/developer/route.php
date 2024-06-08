<?php

use \Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'developer/theme/nepal'],function(){
    Route::resource('module','ModuleController');
});
