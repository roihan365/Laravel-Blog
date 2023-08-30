<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Article::with('user', 'categories')
            ->orderBy('created_at', 'DESC')
            ->get();

        $jlhArtikel = Article::count();
        $publish = Article::where('status', 'PUBLISH')->count();
        $draft = Article::where('status', 'DRAFT')->count();

        foreach ($data as $key => $value) {
            $createdAt = $value->created_at;
            $value->created_at = $createdAt->format('d-m-Y');
        }
        
        return view('admin.home', [
            'data' => $data,
            'jlhArtikel' => $jlhArtikel,
            'publish' => $publish,
            'draft' => $draft
        ]);
    }



}
