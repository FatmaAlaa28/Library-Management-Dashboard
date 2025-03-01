<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with('author', 'student')->get();

        return view('Book.show', compact('books'));
    }

    public function create()
    {
        return view('Book.create');
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'author_id' => $request->author_id,
            'student_id' => $request->student_id,
        ];

        Book::create($data);
        $books = Book::with('author', 'student')->get(); // Load authors with books

        return view('Book.show', compact('books'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $book = Book::findOrFail($request->id);

        return view('Book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'author_id' => $request->author_id,
            'student_id' => $request->student_id,
        ];

        $book = Book::findOrFail($request->id);
        $book->update($data);
        $books = Book::with('author', 'student')->get();

        return view('Book.show', compact('books'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $book = Book::findOrFail($request->id);
        $book->delete();
        $books = Book::with('author', 'student')->get();

        return view('Book.show', compact('books'));
    }
}
