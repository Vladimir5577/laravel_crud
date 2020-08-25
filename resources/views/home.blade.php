<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	  <h5 class="my-0 mr-md-auto font-weight-normal">Laravel</h5>
	  <nav class="my-2 my-md-0 mr-md-3">
	    <a class="p-2 text-dark" href="{{ route('database') }}">Database</a>
	    <a class="p-2 text-dark" href="#">Enterprise</a>
	    <a class="p-2 text-dark" href="#">Support</a>
	    <a class="p-2 text-dark" href="#">Pricing</a>
	  </nav>
	  <a class="btn btn-outline-primary" href="#">Sign up</a>
	</div>

	<div class="container">
		<h1>Home Page</h1>
		<div class="row">
			<div class="col-8">

				@if(session('success'))
					<div class="alert alert-success">
						<h3>{{ session('success') }}</h3>
					</div>
				@endif

				@if($errors->any())
					<div class="alert alert-danger">
						@foreach($errors->all() as $key => $value)
							<h3>{{ $value }}</h3>
						@endforeach
					</div>
				@endif

				<form action="{{ route('submit') }}" method="post">
					@csrf
				  <div class="form-group">
				    <label for="exampleInputEmail1">Name</label>
				    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" autocomplete="off">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Country</label>
				    <input type="text" name="country" class="form-control" id="exampleInputPassword1" placeholder="Country" autocomplete="off">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>

			<div class="col-4">
				<h2>Lorem ipsum dolor </h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</div>

</body>
</html>
