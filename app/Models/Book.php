<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'description', 'price', 'author_id', 'student_id'];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
