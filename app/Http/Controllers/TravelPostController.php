<?php

namespace App\Http\Controllers;

use App\Travel_Posts;
use Illuminate\Http\Request;
use App;

class TravelPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        App::setLocale($locale);
        $posts = Travel_Posts::paginate(15);
        return view('blog.travel_index', [
            'locale' => $locale,
            'posts' => $posts
        ]);
    }

    public function article($locale, $id)
    {
        App::setLocale($locale);
        $article = Travel_Posts::where('id', $id)->first();
        $posts = Travel_Posts::paginate(3);

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
     * @param  \App\Travel_Posts  $travel_Posts
     * @return \Illuminate\Http\Response
     */
    public function show(Travel_Posts $travel_Posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Travel_Posts  $travel_Posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Travel_Posts $travel_Posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Travel_Posts  $travel_Posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Travel_Posts $travel_Posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Travel_Posts  $travel_Posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Travel_Posts $travel_Posts)
    {
        //
    }
}
