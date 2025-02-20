<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Route::get('/', function () {
//     return View('aler');
// });
Route::view('/', 'counter.index');

// //  С ичпользование Controller
// Route::get('/', [MainController::class, 'show']);
