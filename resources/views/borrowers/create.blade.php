@extends('layouts.app')

@section('content')
<h2>Add Borrower</h2>

<form action="{{ route('borrowers.store') }}" method="POST">
    @csrf
    <label>First Name:</label>
    <input type="text" name="first_name" required>

    <label>Last Name:</label>
    <input type="text" name="last_name" required>

    <label>ID Number:</label>
    <input type="text" name="id_number" required>

    <label>Section:</label>
    <input type="text" name="section" required>

    <button type="submit">Save</button>
</form>
@endsection
