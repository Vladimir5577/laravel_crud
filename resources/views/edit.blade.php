@extends('layouts/app')

@section('header')
	Update
@endsection


@section('content')
	<form action="{{ route('update_record', $data->id) }}" method="post">
		@csrf
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" autocomplete="off" value="{{ $data->name }}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Country</label>
	    <input type="text" name="country" class="form-control" id="exampleInputPassword1" placeholder="Country" autocomplete="off" value="{{ $data->country }}">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection