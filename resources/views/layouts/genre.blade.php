@extends('main')
@section('container')
@foreach ($data2 as $d2)
<h1>Genre {{ $d2->name }}</h1>
@endforeach
<hr>
@foreach ($data as $d)
<h3>Title : <a style="text-decoration: none" href="/books/{{ $d->slug }}">{{ $d->name }}</a></h3>
<h4>Author (<a style="text-decoration: none" href="/books/author/{{ $d->author }}">{{ $d->author }}</a>)</h4>
<h5>Genre <a style="text-decoration: none" href="/books/genre/{{ $d->genre->id }}">{{ $d->genre->name }}</a></h5>
<br>
@endforeach
@endsection
