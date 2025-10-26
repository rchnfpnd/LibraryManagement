@extends('layouts.app')

@section('content')
<h2>Add Book</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required>

    <label>Author:</label>
    <input type="text" name="author" required>

    <label>Published Year:</label>
    <input type="number" name="published_year" required>

    <label>Status:</label>
    <select name="status" required>
        <option value="available">Available</option>
        <option value="borrowed">Borrowed</option>
    </select>

    <button type="submit">Save</button>
</form>
@endsection
