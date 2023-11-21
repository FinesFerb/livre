<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookUser;
use App\Models\User;
use Illuminate\Http\Request;

class MyBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->id();

        $user = User::find($id);
        $books = $user->books;

        return view('livre.category.search_book', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(string $id)
    {
        $auth = auth()->id();
        $user = User::find($auth);

        if ($user->books->contains($id)) {
            return back();
        } else {
            $user->books()->attach($id);
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
//     * @param  \App\Models\Book  $book
     * * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $auth = auth()->id();
        $user = User::find($auth);

        $user->books()->detach($id);
        return back();
    }
}
