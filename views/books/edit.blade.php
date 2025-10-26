@extends('layouts.app')

@section('content')
<h2>Edit Book</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Title:</label>
    <input type="text" name="title" value="{{ $book->title }}" required>

    <label>Author:</label>
    <input type="text" name="author" value="{{ $book->author }}" required>

    <label>Published Year:</label>
    <input type="number" name="published_year" value="{{ $book->published_year }}" required>

    <label>Status:</label>
    <select name="status" required>
        <option value="available" {{ $book->status == 'available' ? 'selected' : '' }}>Available</option>
        <option value="borrowed" {{ $book->status == 'borrowed' ? 'selected' : '' }}>Borrowed</option>
    </select>

    <button type="submit">Update</button>
</form>
@endsection
