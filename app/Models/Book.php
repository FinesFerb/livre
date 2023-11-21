<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'uuid', 'title', 'cover', 'writer', 'category', 'country_str', 'time', 'year', 'age_limit', 'description', 'data_izdaniy', 'volume', 'ISBN', 'translate', 'pdf'
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'book_users', 'book_id', 'user_id');
    }
}
