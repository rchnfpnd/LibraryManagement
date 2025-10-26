@extends('layouts.app')

@section('content')
<h2>Borrow Records</h2>

<a href="{{ route('borrow_records.create') }}"><button>Add Record</button></a>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Book</th>
            <th>Borrower</th>
            <th>Borrowed Date</th>
            <th>Return Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($borrow_records as $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->book->title }}</td>
            <td>{{ $record->borrower->first_name }} {{ $record->borrower->last_name }}</td>
            <td>{{ $record->borrowed_date }}</td>
            <td>{{ $record->return_date ?? '-' }}</td>
            <td>{{ $record->status }}</td>
            <td>
                <a href="{{ route('borrow_records.edit', $record->id) }}"><button>Edit</button></a>
                <form action="{{ route('borrow_records.destroy', $record->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
