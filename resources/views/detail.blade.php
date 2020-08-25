@extends('layouts/app')

@section('header')
	Detail
@endsection


@section('content')
	<div class="alert alert-info">
		<h4>Id: {{ $data->id }}</h4>
		<h3>Name: {{ $data->name }}</h3>
		<h4>Country: {{ $data->country }}</h4>
		<a href="{{ route('edit', $data->id) }}" class="btn btn-primary">Edit</a>
		<a href="{{ route('delete', $data->id) }}" class="btn btn-danger">Delete</a>
	</div>
@endsection