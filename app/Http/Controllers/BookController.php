<?php

namespace App\Http\Controllers;

use App\models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:books|max:255',
            'isbn' => 'required|unique:books|max:20',
            'author' => 'required|max:255',
            'description' => 'required',
            'date_published' => 'required|date'
        ]);

        Book::create($request->all());
        return redirect('/books')->with('success', 'Book created successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'isbn' => 'required|max:20|unique:books,isbn,'.$id,
            'author' => 'required|max:255',
            'description' => 'required',
            'date_published' => 'required|date'
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect('/books')->with('success', 'Book updated successfully!');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/books')->with('success', 'Book deleted successfully!');
    }
}
