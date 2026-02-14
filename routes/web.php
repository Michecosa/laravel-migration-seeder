<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// :: 👈 Scope Resolution Operator
Route::get('/', [PageController::class, 'index']);
