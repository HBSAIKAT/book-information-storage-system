@extends('layout')

@section('content')
<div class="container">
    <h1>Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Year Published</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->year_published }}</td>
                <td>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
