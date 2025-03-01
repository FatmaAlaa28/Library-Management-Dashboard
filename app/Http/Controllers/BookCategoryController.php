<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('Hello');
        $lst = Category::with('books')->get();

        return view('BookCategory.show', compact('lst'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BookCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $date = [
            'book_id' => $request->book_id,
            'category_id' => $request->category_id,
        ];
        BookCategory::create($date);

        return redirect()->route('bookcategories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookCategory $bookCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookCategory $bookCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookCategory $bookCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookCategory $bookCategory)
    {
        //
    }
}
