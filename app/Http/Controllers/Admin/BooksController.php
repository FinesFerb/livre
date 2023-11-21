<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBook;
use App\Http\Requests\UpdateBook;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', ['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBook $request)
    {
        $data = $request->validated();
        $data['uuid']=Str::uuid();
        if ($request->hasFile('cover')){
            $cover=$request->file('cover');
            $data['cover']=$cover->getClientOriginalName();
            $cover->storeAs('books_cover', $data['cover'], 'public');

            $pdf=$request->file('pdf');
            $data['pdf']=$pdf->getClientOriginalName();
            $pdf->storeAs('books', $data['pdf'], 'public');
        }
        $book = Book::create($data);
        return redirect()->route('books.index');
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
        return view('admin.books.edit', ['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBook $request, Book $book)
    {
        $data=$request->validated();
        $book->title=$data['title'];
        $book->writer=$data['writer'];
        $book->category=$data['category'];
        $book->country_str=$data['country_str'];
        $book->time=$data['time'];
        $book->year=$data['year'];
        $book->age_limit=$data['age_limit'];
        $book->description=$data['description'];
        $book->data_izdaniy=$data['data_izdaniy'];
        $book->volume=$data['volume'];
        $book->ISBN=$data['ISBN'];
        $book->translate=$data['translate'];

            $cover=$request->file('cover');
            $book->cover=$cover->getClientOriginalName();
            $cover->storeAs('books_cover', $book->cover, 'public');

            $pdf=$request->file('pdf');
            $book->pdf=$pdf->getClientOriginalName();
            $pdf->storeAs('books', $book->pdf, 'public');

        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return back();
    }
}
