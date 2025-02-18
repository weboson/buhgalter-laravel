<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Route::get('/', function () {
//     return view('main', ['title' => 'Услуги бухгалтера']);
// });


//  С ичпользование Controller
Route::get('/', [MainController::class, 'show']);
