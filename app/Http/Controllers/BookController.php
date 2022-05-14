<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::select('id', 'name')->orderby('id', 'desc')->get();
        return view('book.index', compact('books'));
    }

    public function latest()
    {
        $books = Book::select("*")->orderby("id", "desc")->take(3)->get();
        return view('book.latests', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show', compact('book'));
    }

}
