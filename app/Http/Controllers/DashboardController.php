<?php

namespace App\Http\Controllers;
use App\Models\Book;

class DashboardController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('Dashboard.dashboard',compact('books'));
    }
}
