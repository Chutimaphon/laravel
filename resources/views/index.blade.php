@extends('template')

@section('title','Hello world')

@section('content')
	<h1>Hello World {{$name}}{{$department}}</h1>

<a href="{{ url('index_1')}}"> next </a>
@endsection

