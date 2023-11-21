<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function download(string $uuid)
    {
        $book=Book::where('uuid',$uuid)->firstOrFail();
        $path=storage_path('app/public/books/' . $book->pdf);
        return response()->download($path);
    }

    public function newbook()
    {
        $books = Book::where('category', 'Новинка')->get();
        return view('livre.books', ['books' => $books]);
    }

    public function classicalbook()
    {
        $books = Book::where('category', 'Классика')->get();
        return view('livre.books', ['books' => $books]);
    }

    public function travelbook()
    {
        $books = Book::where('category', 'Путешествие')->get();
        return view('livre.books', ['books' => $books]);
    }

    public function search(Request $request)
    {
        $s = $request->s;
        $books = Book::where('title', 'LIKE', "%{$s}%")->orderBy('title')->get();
        return view('livre.books', compact('books'));
    }

}
