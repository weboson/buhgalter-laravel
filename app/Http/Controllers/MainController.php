<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
use Illuminate\View\View;

class MainController extends Controller
{
    public function show(): View
    {
        // метод view по умолчанию начинат смотерть папку 'view'
        return view('main', [

            'counter' => Counter::all(), // вернуть все данные
            'title' => 'Услуги бухгалтера' // для title в main.blade
        ]);
    }
}
