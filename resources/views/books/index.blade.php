@include('partials.header')

<div class="container">
    <h2>Book List</h2>
    <!-- Insert 20 books here eme -->
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }} by {{ $book->author }}</li>
        @endforeach
    </ul>
</div>

@include('partials.footer')
