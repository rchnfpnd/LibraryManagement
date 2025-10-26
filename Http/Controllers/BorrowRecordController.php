<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BorrowRecord;
use App\Models\Book;
use App\Models\Borrower;

class BorrowRecordController extends Controller
{
    // Display all borrow records
    public function index()
    {
        $borrow_records = BorrowRecord::with('book', 'borrower')->get();
        return view('borrow_records.index', compact('borrow_records'));
    }

    // Show form to create a new borrow record
    public function create()
    {
        $books = Book::all();
        $borrowers = Borrower::all();
        return view('borrow_records.create', compact('books', 'borrowers'));
    }

    // Store new borrow record
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'borrower_id' => 'required|exists:borrowers,id',
            'borrowed_date' => 'required|date',
            'return_date' => 'nullable|date',
            'status' => 'required|in:borrowed,returned',
        ]);

        BorrowRecord::create($request->all());
        return redirect()->route('borrow_records.index')->with('success', 'Borrow record added successfully.');
    }

    // Show edit form
    public function edit(BorrowRecord $borrow_record)
    {
        $books = Book::all();
        $borrowers = Borrower::all();
        return view('borrow_records.edit', compact('borrow_record', 'books', 'borrowers'));
    }

    // Update borrow record
    public function update(Request $request, BorrowRecord $borrow_record)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'borrower_id' => 'required|exists:borrowers,id',
            'borrowed_date' => 'required|date',
            'return_date' => 'nullable|date',
            'status' => 'required|in:borrowed,returned',
        ]);

        $borrow_record->update($request->all());
        return redirect()->route('borrow_records.index')->with('success', 'Borrow record updated successfully.');
    }

    // Delete borrow record
    public function destroy(BorrowRecord $borrow_record)
    {
        $borrow_record->delete();
        return redirect()->route('borrow_records.index')->with('success', 'Borrow record deleted successfully.');
    }
}
