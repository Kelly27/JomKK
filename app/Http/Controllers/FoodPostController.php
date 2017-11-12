<?php

namespace App\Http\Controllers;

use App\Food_Post;
use Illuminate\Http\Request;
use App;

class FoodPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        App::setLocale($locale);
        $posts = Food_Post::paginate(15);
        return view('blog.food_index', [
            'locale' => $locale,
            'posts' => $posts
        ]);
    }

    public function article($locale, $id)
    {
        App::setLocale($locale);
        $article = Food_Post::where('id', $id)->first();
        $posts = Food_Post::paginate(3);

        return view('blog.article.article',[
            'locale' => $locale,
            'article' => $article,
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food_Post  $food_Post
     * @return \Illuminate\Http\Response
     */
    public function show(Food_Post $food_Post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food_Post  $food_Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Food_Post $food_Post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food_Post  $food_Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food_Post $food_Post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food_Post  $food_Post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food_Post $food_Post)
    {
        //
    }
}
