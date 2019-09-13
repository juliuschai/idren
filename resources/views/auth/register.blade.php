<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>IDren</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="Komponen/Carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="Komponen/Carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="Komponen/Aos/aos.css">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light position-absolute">
		<a class="navbar-brand" href="../"> <img src="../Logo/fwdlogoidren/Alternatif Logo-03.jpg" height="55px"
				width="55px">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>

	<!-- NAVBAR SELESAI -->

	<div class="container-fluid">
		<div class="row">
			<div class="col mt-5 pt-5">
				<div style="background-color:white;">
					<h1 class="font-weight-bold pl-5 pr-5">Register to IdREN</h1>
					<p class="pl-5 pr-5">Welcome to IDren. Lets register to join with us!</p>
					<form class="pl-5 pr-5 " method="POST" action="{{ route('register') }}">
						@csrf

						@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						<div class="form-group">
							<input type="text" name="username" class="form-control" id="username"
								placeholder="Username anda . . .">
						</div>

						<div class="form-group">
							<input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email. . .">
						</div>

						<div class="form-group">
							<label for="peran">Register Sebagai</label>
							<select name="peran" class="form-control" id="peran">
								<option value = "1">Mahasiswa</option>
								<option value = "2">Dosen</option>
								<option value = "3">Umum</option>
							</select>
						</div>

						<div class="form-group">
						<input type="password" name="password" class="form-control" id="password" aria-describedby="passwordhelp"
								placeholder="Masukkan Password . . ">
						</div>

						<div class="form-group">
							<input type="password" name="password_confirmation" class="form-control" id="Cpassword" aria-describedby="passwordhelp"
								placeholder="Masukkan ulang Password . . ">
							<small id="passwordhelp" class="form-text text-muted">IDren tidak akan menyebarkan password
								anda.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="{{ route('login') }}"> Punya Akun? Login Disini.</a></small>
						</div>

						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
							<label class="form-check-label" for="exampleCheck1">Kebijakan Privasi</label>
						</div>
						<button type="submit" class="btn btn-primary" style="border-radius: 30px">
							&nbsp; Register &nbsp;
						</button>
					</form>
				</div>
			</div>
			<div class="col d-none d-lg-block mr-0 pr-0 ml-5 pl-5 " style="background-color: #F9D9EB; height: fit-content;">
				<img class="vh_height100 position-absolute" src="../Illustration/Hero - Sign up Login.png">
			</div>
		</div>
	</div>

	<!-- SCRIPT -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
		integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
		integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
	</script>
	<script src="Komponen/Aos/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>