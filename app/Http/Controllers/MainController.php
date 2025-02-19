<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\View\View;

class MainController extends Controller
{
    public function show(): View
    {
        // метод view по умолчанию начинат смотерть папку 'view'
        return view('main', [

            'posts' => Posts::all(), // вернуть все данные
            'title' => 'Услуги бухгалтера' // для title в main.blade
        ]);
    }
}
