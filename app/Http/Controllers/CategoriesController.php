<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah-kategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validation = $request->validate(
            [
                'name' => 'required|string|max:255',
            ],
            [
                'name.required' => 'Nama kategori harus diisi',
                'name.string' => 'Nama kategori harus berupa string',
                'name.max' => 'Nama kategori maksimal 255 karakter',
            ]
        );

        if ($validation) {
            Categories::create([
                'name' => $request->name,
            ]);
            return back()->with('success', 'Kategori berhasil di tambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
