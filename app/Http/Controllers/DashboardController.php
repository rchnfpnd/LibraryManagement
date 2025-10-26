<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrower;
use App\Models\BorrowRecord;

class DashboardController extends Controller
{
    public function index()
    {
        $booksCount = Book::count();
        $borrowersCount = Borrower::count();
        $borrowRecordsCount = BorrowRecord::count();

        return view('dashboard', compact('booksCount', 'borrowersCount', 'borrowRecordsCount'));
    }
}
