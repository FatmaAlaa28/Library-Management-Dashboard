<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    public function book(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    protected $fillable = ['name', 'email', 'phone', 'age'];
}
