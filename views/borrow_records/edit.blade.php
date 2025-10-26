@extends('layouts.app')

@section('content')
<h2>Edit Borrow Record</h2>

<form action="{{ route('borrow_records.update', $borrow_record->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Book:</label>
    <select name="book_id" required>
        @foreach($books as $book)
        <option value="{{ $book->id }}" {{ $borrow_record->book_id == $book->id ? 'selected' : '' }}>{{ $book->title }}</option>
        @endforeach
    </select>

    <label>Borrower:</label>
    <select name="borrower_id" required>
        @foreach($borrowers as $borrower)
        <option value="{{ $borrower->id }}" {{ $borrow_record->borrower_id == $borrower->id ? 'selected' : '' }}>{{ $borrower->first_name }} {{ $borrower->last_name }}</option>
        @endforeach
    </select>

    <label>Borrowed Date:</label>
    <input type="date" name="borrowed_date" value="{{ $borrow_record->borrowed_date }}" required>

    <label>Return Date:</label>
    <input type="date" name="return_date" value="{{ $borrow_record->return_date }}">

    <label>Status:</label>
    <select name="status" required>
        <option value="borrowed" {{ $borrow_record->status == 'borrowed' ? 'selected' : '' }}>Borrowed</option>
        <option value="returned" {{ $borrow_record->status == 'returned' ? 'selected' : '' }}>Returned</option>
    </select>

    <button type="submit">Update</button>
</form>
@endsection
