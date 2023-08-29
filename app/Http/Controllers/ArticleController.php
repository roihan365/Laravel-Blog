<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Article::with('user')
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah-artikel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        //
    }
}
