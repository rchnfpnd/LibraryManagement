@extends('layouts.app')

@section('content')
<h2>Add Borrow Record</h2>

<form action="{{ route('borrow_records.store') }}" method="POST">
    @csrf
    <label>Book:</label>
    <select name="book_id" required>
        @foreach($books as $book)
        <option value="{{ $book->id }}">{{ $book->title }}</option>
        @endforeach
    </select>

    <label>Borrower:</label>
    <select name="borrower_id" required>
        @foreach($borrowers as $borrower)
        <option value="{{ $borrower->id }}">{{ $borrower->first_name }} {{ $borrower->last_name }}</option>
        @endforeach
    </select>

    <label>Borrowed Date:</label>
    <input type="date" name="borrowed_date" required>

    <label>Return Date:</label>
    <input type="date" name="return_date">

    <label>Status:</label>
    <select name="status" required>
        <option value="borrowed">Borrowed</option>
        <option value="returned">Returned</option>
    </select>

    <button type="submit">Save</button>
</form>
@endsection
