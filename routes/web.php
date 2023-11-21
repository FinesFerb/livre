<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MyBooksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\HomeController;
//use App\Http\Requests\Auth\ProfileController;
//use App\Http\Controllers\SocialController;
use App\Http\Controllers\StrBookController;
use App\Models\Book;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $books = Book::all();
    return view('livre.books_idx', ['books'=>$books]);
})->name('welcome');

//category
Route::get('/new-book', [BookController::class, 'newbook'])->name('book.newbook');
Route::get('/classical-book', [BookController::class, 'classicalbook'])->name('book.classical');
Route::get('/traveling-book', [BookController::class, 'travelbook'])->name('book.travel');

Route::get('/search', [BookController::class, 'search'])->name('search');



//list-product
Route::get('/list-product/{book}', [StrBookController::class, 'show'])->name('book.show');
Route::get('/books/{uuid}/download', [BookController::class, 'download'])->name('book.download');

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Auth and profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mybooks',[MyBooksController::class, 'index'])->name('mybooks.index');
    Route::get('/mybooks/delete/{id}',[MyBooksController::class, 'destroy'])->name('mybooks.destroy');
    Route::get('/mybooks_store/{id}',[MyBooksController::class, 'store'])->name('mybooks.store');
});

//Admin
Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('AdminHome');
    Route::resource('books', BooksController::class);
    Route::resource('users', UserController::class);
    Route::get('/books/{uuid}/download', 'App\Http\Controllers\BookController@download')->name('books.download');
});

//SocialAuth
Route::group(['middleware' => 'guest'], function (){
    Route::get('/vk/auth', 'App\Http\Controllers\SocialController@index')->name('vk.auth');
    Route::get('/vk/auth/callback', 'App\Http\Controllers\SocialController@callback');

    Route::get('/google/auth', 'App\Http\Controllers\SocialController@google')->name('google.auth');
    Route::get('/google/auth/callback', 'App\Http\Controllers\SocialController@callbackGoogle');
});


require __DIR__.'/auth.php';
