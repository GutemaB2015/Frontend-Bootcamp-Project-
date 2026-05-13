<?php

use App\Http\Controllers\BootController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return views('welcome');
});
Route::get('boot', [BootController::class, 'bootcamp']);
