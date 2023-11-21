<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $books_count = Book::all()->count();
        $user_count = User::all()->count();

        return view('admin.home.index', [
                'books_count' => $books_count,
                'user_count' => $user_count
            ]);
    }
}
