
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Laradex - @yield('title')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-1">



			<nav class="navbar navbar-expand-lg navbar-light bg-primary">
					<a class="navbar-brand" href="/trainers">LaraDex</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
					  <ul class="navbar-nav">
						<li class="nav-item active">
						  <a class="nav-link" href="/trainers/create">Crear <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href=""> </a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="">  </a>
						</li>
						<li class="nav-item dropdown">
						  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Mas Opciones
						  </a>
						  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						  </div>
						</li>
					  </ul>
					</div>
				  </nav>



<!--
			<nav class="navbar navbar-dark bg-primary">
					<a class="navbar-brand" href="/trainers">LaraDex</a>
					
			</nav> -->
			@if(session('info'))
				<div class="row">
					<div class="col">
						<div class="alert alert-success">
							{{ session('info') }}
						</div>
					</div>
				</div>
			@endif

		@yield('content')
	</div>
	<!--  Scripts  -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	

</body>
</html>