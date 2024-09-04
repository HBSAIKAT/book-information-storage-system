@extends('layout')

@section('content')
<div class="container mt-5">
    <h1>Book Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $book->title }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Author: {{ $book->author }}</h5>
            <p class="card-text"><strong>Publisher:</strong> {{ $book->publisher }}</p>
            <p class="card-text"><strong>Year Published:</strong> {{ $book->year_published }}</p>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
