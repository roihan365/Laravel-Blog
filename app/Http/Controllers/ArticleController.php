<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Article::with('user', 'categories')
            ->orderBy('created_at', 'DESC')
            ->paginate(10); // Change 10 to the desired number of items per page

        return view('users.home', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('admin.tambah-artikel', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //make code for store data here with validation
        $validation = $request->validate(
        [
            'title' => 'required',
            'description' => 'required',
            'kategori' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ], 
        [
           'title.required' => 'Judul harus diisi',
            'description.required' => 'Konten harus diisi',
            'kategori.required' => 'Kategori harus diisi',
            'image.required' => 'Gambar harus diisi',
            'image.image' => 'File harus berupa gambar',
            'image.mimes' => 'File harus berupa gambar',
            'image.max' => 'Ukuran file terlalu besar. Maksimal 2MB'
        ]);

        if ($validation) {
            $data = $request->all();
            $data['image'] = $request->file('image')->store(
                'assets/gallery', 'public'
            );

            Article::create([
                'title' => $data['title'],
                'slug' => Str::slug($data['title']),
                'content' => $data['description'],
                'category_id' => $data['kategori'],
                'image' => $data['image'],
                'user_id' => auth()->user()->id,
                'status' => 'PUBLISH'
            ]); 
            
            return back()->with('success', 'Artikel berhasil di publish');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $data = Article::with('user', 'categories')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('users.detailblog', [
            'data' => $data
        ]);
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
    public function destroy($id): RedirectResponse
    {
        $item = Article::findOrFail($id);
        $item ->delete();

        return back()->with('success', 'Artikel berhasil di hapus');;
    }
}


