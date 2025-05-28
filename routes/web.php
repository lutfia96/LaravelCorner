<?php

use App\Http\Controllers\UserDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserDetailController::class, 'index'])->name('index');
