@extends('main')
@section('container')
<div class="d-flex justify-content-between">
    <h3>Let's find the books you are looking for</h3>
    <form action="/books/search" method="get" class="d-flex" role="search" enctype="multipart/form-data">
        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
<hr>
@foreach ($data as $d)
<h3>Title : <a style="text-decoration: none" href="/books/{{ $d->slug }}">{{ $d->name }}</a></h3>
<h4>Author (<a style="text-decoration: none" href="/books/author/{{ $d->author }}">{{ $d->author }}</a>)</h4>
<h5>Genre <a style="text-decoration: none" href="/books/genre/{{ $d->genre->id }}">{{ $d->genre->name }}</a></h5>
<br>
@endforeach
@endsection
