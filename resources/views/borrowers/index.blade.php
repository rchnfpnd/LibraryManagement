@extends('layouts.app')

@section('content')
<h2>Borrowers</h2>

<a href="{{ route('borrowers.create') }}"><button>Add Borrower</button></a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>ID Number</th>
            <th>Section</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($borrowers as $borrower)
        <tr>
            <td>{{ $borrower->id }}</td>
            <td>{{ $borrower->last_name }}</td>
            <td>{{ $borrower->first_name }}</td>
            <td>{{ $borrower->id_number }}</td>
            <td>{{ $borrower->section }}</td>
            <td>
                <a href="{{ route('borrowers.edit', $borrower->id) }}"><button class="edit">Edit</button></a>
                <form action="{{ route('borrowers.destroy', $borrower->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button class="delete" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
