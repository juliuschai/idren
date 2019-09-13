<html lang="en"><head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>idREN Profile</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="Komponen/Carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="Komponen/Carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="Komponen/Aos/aos.css">

	<!-- Script with defer -->

</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
	<nav class="navbar navbar-expand-lg navbar-light position-absolute">
		<a class="navbar-brand" href="../"> <img src="../Logo/fwdlogoidren/Alternatif Logo-03.jpg" height="55px" width="55px">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>

	<!-- NAVBAR SELESAI -->
	<script src="{{asset('js/awesomplete.js')}}" defer></script>
	<div class="container-fluid">
		<div class="row">
			<div class="col mt-5 pt-5">
				<div style="background-color:white;">
					<h1 class="font-weight-bold pl-5 pr-5 pt-5">User Profile</h1>
					<img src="{{asset($user->profile_picture ? 'profilepictures/'.$user->profile_picture : 'profilepictures/dummy.png')}}">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="name"  class="form-control" id="name" value="{{$user->name}}" readonly>
					</div>

					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" id="username"
							value="{{$user->username}}" placeholder="Username anda . . ." readonly>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" placeholder="Masukkan Email. . ." readonly>
					</div>

					<div class="form-group">
						<label>Nomer Handphone</label>
						<input type="tel" name="phone_number" class="form-control" id="number" value="{{$user->phone_number}}" readonly>
					</div>

					<div class="form-group">
						<label>Instansi</label>
						<input name="instansi_id" id="instansi_id" class="form-control" value="{{ $user->instansiName }}" readonly>
					</div>

					<table class="table table-hover">
						<tbody>
							@foreach($playlists as $playlist)
							<tr>
								<td>{{ $playlist->judul }}</td>
								<td>{{ $playlist->desc }}</td>
								<td>
									<a href="{{ route('playlist.view', ['id' => $playlist->id]) }}">
										<button type="button" class="btn btn-danger">View</button>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $playlists->render() }}
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