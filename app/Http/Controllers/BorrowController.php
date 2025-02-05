<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    public function index(){
        
        $borrows = Borrow::with(['book', 'user'])->get();
        return view('borrows.index', compact('borrows'));
    }
}
