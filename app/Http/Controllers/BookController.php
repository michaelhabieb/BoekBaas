<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('genre')->get();

        if (Auth::user()->is_admin) {
            return view('admin.books.index', compact('books'));
        } else {
            return view('books.index', compact('books'));
        }
    }

    public function create()
    {
        $genres = Genre::all(); // Haal alle genres op voor de dropdown
        return view('admin.books.create', compact('genres'));
    }

    public function edit(Book $book)
{
    $genres = Genre::all();
    return view('admin.books.edit', compact('book', 'genres'));
}

public function update(Request $request, Book $book)
{
    // Valideer de invoer
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'genre_id' => 'nullable|exists:genres,id',
        'isbn' => 'nullable|string|max:20|unique:books,isbn,' . $book->id,
        'publication_year' => 'required|integer|min:1000|max:' . date('Y'),
    ]);

    // Update het boek
    $book->update([
        'title' => $request->title,
        'author' => $request->author,
        'genre_id' => $request->genre_id,
        'isbn' => $request->isbn,
        'publication_year' => $request->publication_year,
    ]);

    // Redirect naar de boekenlijst met een succesbericht
    return redirect()->route('books.index')->with('success', 'Book updated successfully!');
}


    public function store(Request $request)
    {
        // Valideer de invoer
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre_id' => 'nullable|exists:genres,id',
            'isbn' => 'nullable|string|max:20|unique:books,isbn',
            'publication_year' => 'required|integer|min:1000|max:' . date('Y'),
        ]);

        // Maak een nieuw boek aan
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'genre_id' => $request->genre_id,
            'isbn' => $request->isbn,
            'publication_year' => $request->publication_year,
        ]);

        // 🚀 **Fix: Redirect naar books.index**
        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }


    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}
