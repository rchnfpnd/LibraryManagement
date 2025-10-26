@extends('layouts.app')

@section('content')
<h2>Books</h2>

<a href="{{ route('books.create') }}"><button>Add Book</button></a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Published Year</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->published_year }}</td>
            <td>{{ $book->status }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}"><button class="edit">Edit</button></a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
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
