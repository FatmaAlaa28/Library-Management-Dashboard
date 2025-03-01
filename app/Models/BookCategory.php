<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $table = 'books_categories'; // Ensure Laravel uses the correct table name

    protected $fillable = ['book_id', 'category_id'];
}
