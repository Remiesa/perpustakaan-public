@extends('main')
@section('container')
<h1>Searching for "{{ $data2 }}"</h1>
<hr>
@foreach ($data as $d)
<h3>Title : <a style="text-decoration: none" href="/books/{{ $d->slug }}">{{ $d->name }}</a></h3>
<h4>Author (<a style="text-decoration: none" href="/books/author/{{ $d->author }}">{{ $d->author }}</a>)</h4>
<h5>Genre <a style="text-decoration: none" href="/books/genre/{{ $d->genre->id }}">{{ $d->genre->name }}</a></h5>
<br>
@endforeach
@endsection
