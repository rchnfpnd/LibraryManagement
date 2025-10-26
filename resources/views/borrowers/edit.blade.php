@extends('layouts.app')

@section('content')
<h2>Edit Borrower</h2>

<form action="{{ route('borrowers.update', $borrower->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>First Name:</label>
    <input type="text" name="first_name" value="{{ $borrower->first_name }}" required>

    <label>Last Name:</label>
    <input type="text" name="last_name" value="{{ $borrower->last_name }}" required>

    <label>ID Number:</label>
    <input type="text" name="id_number" value="{{ $borrower->id_number }}" required>

    <label>Section:</label>
    <input type="text" name="section" value="{{ $borrower->section }}" required>

    <button type="submit">Update</button>
</form>
@endsection
