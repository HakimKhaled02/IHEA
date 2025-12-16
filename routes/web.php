<?php

use App\Http\Controllers\AwardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('awards.index');
});

Route::resource('awards', AwardController::class);

