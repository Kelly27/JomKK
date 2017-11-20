<?php

namespace App\Http\Controllers;

use App\Directory;
use App\Directory_operating_hour;

use Illuminate\Http\Request;
use App;

class DirectoryController extends Controller
{
    public function index($locale)
    {
        // $directory = Directory::first();
        // $hour = Directory_operating_hour::first();
        // return $directory->directory_operating_hours()->get();
        App::setLocale($locale);
        $food = Directory::where('type', 1)->paginate(6);
        $travel = Directory::where('type', 2)->paginate(6);
        return view('directory.index', [
            'locale' => $locale,
            'food' => $food,
            'travel' => $travel
        ]);
    }
}
