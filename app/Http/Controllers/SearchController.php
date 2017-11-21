<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food_Post;
use App;

class SearchController extends Controller
{
    public function index($locale)
    {
        App::setLocale($locale);
        $food = Food_Post::first();
        return view('search.index', [
            'locale' => $locale,
            'food' => $food
        ]);
    }
}
