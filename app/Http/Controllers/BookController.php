<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        if (Auth::user()->is_admin) {
            // Admin view
            return view('admin.books.index', compact('books'));
        } else {
            // Regular user view
            return view('books.index', compact('books'));
        }
    }
}
