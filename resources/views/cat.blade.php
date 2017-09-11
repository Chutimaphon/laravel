@extends('template')

@section('title', '{{ $name }}' )

@section('content')
	<h1>Cat : {{ $name }}</h1>
	<h2>Cat : {{ $size }}</h2>
@endsection