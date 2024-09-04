<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return redirect()->route('books.index');
});

// Display a list of all books
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Show the form to create a new book
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Store a new book in the database
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Show the form to edit an existing book
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');

// Update an existing book in the database
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

// Delete a book from the database
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

// Display a specific book's details (Optional, if needed)
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
