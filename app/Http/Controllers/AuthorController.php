<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::get();

        return view('Author.show', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ];
        Author::create($data);
        $authors = Author::get();

        return view('Author.show', compact('authors'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $author = Author::findOrFail($request->id);

        return view('Author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ];
        $author = Author::findOrFail($request->id);
        $author->update($data);
        $authors = Author::get();

        return view('Author.show', compact('authors'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $author = Author::findOrFail($request->id);
        $author->delete();
        $authors = Author::get();

        return view('Author.show', compact('authors'));
    }
}
