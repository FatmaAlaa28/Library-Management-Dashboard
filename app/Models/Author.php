<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['first_name', 'last_name'];

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
