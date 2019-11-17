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
	<style>
	.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
	background-image: url("https://i.ibb.co/wKyczvd/gambartest.png");
    height: 56px;
    content: "";
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
	</style>
	<script src="../Komponen/vp/vunit.js"></script>
	<script>
		new vUnit({
			CSSMap: {
				'.vh_height': {
					property: 'height',
					reference: 'vh'
				},
				'.vw_font-size': {
					property: 'font-size',
					reference: 'vw'
				},
				'.vmin_margin-top': {
					property: 'margin-top',
					reference: 'vmin'
				}
			},
			onResize: function() {
				console.log('sukses resize');
			}
		}).init();
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light position-absolute">
		<a class="navbar-brand" href="../"> <img src="../Logo/fwdlogoidren/Alternatif Logo-03.jpg" height="55px" width="55px">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
		aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
	</nav>

<!-- NAVBAR SELESAI -->

	<div class="container-fluid">
		<div class="row">
			<div class="col mt-5 pt-5" >
				<div style="background-color:white;">
					<h1 class="font-weight-bold pl-5 pr-5">	Registrasi Admin Instansi</h1>
					<p class="pl-5 pr-5">Isilah formulir di bawah ini untuk mengajukan registrasi admin instansi.</p>
					<form class="pl-5 pr-5 " method="POST" action="{{ route('home.requestadmin') }}" enctype="multipart/form-data">
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
							<label for="instansi_id">Pilih Instansi</label>
							<input name="fnama_universitas" id="instansi_id" class="form-control awesomplete" value="{{ $user->instansiName }}" list="mylist">
								<datalist id="mylist">
									@foreach($universities as $university)
										<option value="{{$university->instansi}}" {{ $university->id == $user->instansi_id ? 'selected' : '' }}>{{$university->instansi}}</option>
									@endforeach
								</datalist>
							</select>
						</div>
						<div class="form-group">
							<label for="fnama_unit_it">Nama Unit IT</label>
							<input id="fnama_unit_it" name="fnama_unit_it" type="text" class="form-control" aria-describedby="fnuit_Help" placeholder="Nama Unit IT" required>
						</div>
						<div class="form-group">
							<label for="femail">Email</label>
							<input id="femail" name="femail" type="email" class="form-control" aria-describedby="fe_Help" placeholder="Email" required>
						</div>
						<div class="form-group">
							<label for="fnama_kepala_unit">Nama Kepala Unit</label>
							<input id="fnama_kepala_unit" name="fnama_kepala_unit" type="text" class="form-control" aria-describedby="fnku_Help" placeholder="Nama Kepala Unit" required>
						</div>
						<div class="form-group files">
							<label>Upload Bukti Surat </label>
							<input type="file" name="file" class="form-control-file" multiple="">
						  </div>
						<button type="submit" class="btn btn-danger btn-lg" style="border-radius: 30px">&nbsp; Register &nbsp; </button>
						<br><br><br>
					</form>
				</div>
			</div>
			<div class="col d-none d-lg-block mr-0 pr-0 ml-5 pl-5" style="background-color: #F9D9EB;">
				<img class="vh_height100" src="../Illustration/Hero - Sign up Login.png">
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