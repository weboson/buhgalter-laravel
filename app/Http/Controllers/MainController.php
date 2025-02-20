<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function show() {
        // take(4) - это лимит вывода данных (не больше 4-х статей)
        $posts = Posts::all()->take(4); 

        return view('counter.index', [
            'posts' => $posts
        ]);
    }

}
