@extends('main')
@section('container')
<h3 style="text-align: center">{{ $data->name }}</h3>
<br>
<h4 style="text-align: center">Author {{ $data->author }}</h4>
<h5 style="text-align: center">Genre {{ $data->genre->name }}</h5>
<br>
<br>
<p style="text-align: center"><strong>Synopsis</strong></p>
<p>{{ $data->sinopsis }}</p>
@endsection
