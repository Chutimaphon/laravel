@extends('template')

@section('title','Hello world')

@section('content')
	<h1>Hello World {{$name}}{{$department}}</h1>
	<button class="btn btn-primary">next</button>

@endsection