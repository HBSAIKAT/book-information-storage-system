@extends('layout')

@section('content')
<div class="container">
    <h1>{{ isset($book) ? 'Edit' : 'Add' }} Book</h1>
    <form action="{{ isset($book) ? route('books.update', $book) : route('books.store') }}" method="POST">
        @csrf
        @if(isset($book))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="year_published" class="form-label">Year Published</label>
            <input type="number" class="form-control" id="year_published" name="year_published" value="{{ $book->year_published ?? '' }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
