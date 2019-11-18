<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>@yield('title')</title>

  <link rel="apple-touch-icon" sizes="57x57" href="assets/icon/favicon.ico">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/icon/favicon.ico">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/favicon.ico">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/icon/favicon.ico">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/favicon.ico">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/icon/favicon.ico">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/favicon.ico">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/icon/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/favicon.ico">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/icon/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon.ico">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/icon/favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon.ico">
  <link rel="manifest" href="assets/icon/fav/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/icon/favicon.ico">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/style/style.css">
  <link rel="stylesheet" href="assets/style/style-about.css">
  <link rel="stylesheet" href="assets/style/media-querys.css">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
		<a class="navbar-brand" href="#">
			<img src="{{ asset('assets/img/suportedby/Logo_of_the_Ministry_of_Research,_Technology,_and_Higher_Education_of_the_Republic_of_Indonesia.png') }}" height="auto" width="54px">
		</a>
		<a class="navbar-brand" href="#">
			<img src="{{ asset('assets/img/suportedby/250px-Telkom_Indonesia_2013.svg.png') }}" height="auto" width="54px">
		</a>
		<a class="navbar-brand" href="#">
			<img src="{{ asset('assets/img/suportedby/250x113Indosat_Ooredoo_logo.svg.png') }}" height="auto" width="54px">
		</a>
		<a class="navbar-brand" href="/">
			<img src="{{ asset('assets/img/logo-baru.jpg') }}" height="auto" width="54px">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				@auth
					<li class="nav-item btn">
						<a class="nav-link" href="{{route('home')}}">Dashboard</a>
					</li>
				@endauth
				<li class="nav-item btn">
					<a class="nav-link" href="{{route('about')}}">About IdREN</a>
				</li>
				<li class="nav-item btn">
					<a class="nav-link" href="{{route('resources')}}">Resources</a>
				</li>
				<li class="nav-item btn">
					<a class="nav-link" href="#">Services</a>
				</li>
				<li class="nav-item btn">
					<a class="nav-link" href="{{route('research-platform')}}">Research</a>
				</li>
				<li class="nav-item btn">
					<a class="nav-link" href="{{route('media')}}">Media&nbsp;</a>
				</li>
				@auth {{-- if logged in --}}
					<li class="nav-item">
						<a href="{{route('logout')}}" class="nav-link text-center"><button type="button" class="btn btn-danger" style="border-radius: 30px; color:white;font-size: 14px"> &nbsp;&nbsp; Logout &nbsp;&nbsp; </button></a>
					</li>
				@else {{-- if logged out --}}
					<li class="nav-item">
						<a href="{{route('login')}}" class="nav-link text-center"><button type="button" class="btn btn-danger" style="border-radius: 30px; color:white;font-size: 14px"> &nbsp;&nbsp; Sign in &nbsp;&nbsp; </button></a>
{{--     
<div class="btn-group hmz-signin">
  <button type="button" class="btn btn-danger dropdown-toggle rounded-pill" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sign in </button>
  <div class="dropdown-menu dropdown-menu-right">
    <form class="px-4 py-3">
      <div class="form-group">
        <label for="emailnya">Email address</label>
        <input type="email" class="form-control" id="emailnya" placeholder="email@example.com" style="min-width:15em">
      </div>
      <div class="form-group">
        <label for="passwordnya">Password</label>
        <input type="password" class="form-control" id="passwordnya" placeholder="Password">
      </div>
      <div class="row align-items-center">
        <div class="col-auto mr-auto">
          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="dropdownCheck">
              <label class="form-check-label" for="dropdownCheck">Remember me</label>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-danger">Sign in</button>
        </div>
      </div>
    </form>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Forgot password?</a>
  </div>
</div>
 --}}
					</li>
					<li class="nav-item">
						<a href="{{route('register')}}" class="nav-link text-center"><button type="button" class="btn btn-outline-danger" style="border-radius: 30px; font-size: 14px"> &nbsp;&nbsp; Sign up &nbsp;&nbsp; </button></a>
					</li>
				@endif
			</ul>
		</div>
	</nav>
	<main>
		@yield('content')
	</main>

  <!-- footer -->
  <div class="container-fluid bg-white">
    <div class="row mt-0 pt-0 pb-5 text-center">
      <div class="col-md-5 mt-5">
        <div class="row">
          <div class="col">
            <img src="{{ asset('assets/img/Alternatif Logo-03.jpg') }}" alt="Idren" height="80px" width="80px"><br><br>
            <a href="{{route('about')}}" style="color:black; font-size:20px">About IDren</a><br><br>
            <a href="{{route('resources')}}" style="color:black; font-size:20px">Resources</a><br><br>
            <a href="#" style="color:black; font-size:20px">Services</a><br><br>
            <a href="{{route('research-platform')}}" style="color:black; font-size:20px">Research Platform</a><br><br>
            <a href="{{route('media')}}" style="color:black; font-size:20px">Media</a><br><br>
          </div>
          <div class="col mt-2 pt-2"><br>
            <h3>Sitemap</h3><br>
            <a href="#" style="color:black; font-size:20px">Recruitment</a><br><br>
            <a href="#" style="color:black; font-size:20px">Case Studies</a><br><br>
            <a href="#" style="color:black; font-size:20px">Collaboration</a><br><br>
            <a href="#" style="color:black; font-size:20px">Grant</a><br><br>
            <a href="#" style="color:black; font-size:20px">Journals</a><br><br>
          </div>
        </div>
        <div class="row">
          <div class="col mt-5 pt-3">
            <img src="{{ asset('assets/img/email.svg') }}" alt="" height="25px" width="50px">
            <a href="https://www.youtube.com/watch?v=5dPYWWZj1AM"><img src="{{ asset('assets/img/indra.svg') }}" alt="" height="50px" width="50px"></a>
            <a href="https://www.instagram.com/idren.id/"><img src="{{ asset('assets/img/instagram.svg') }}" alt="" height="27px" width="50px"></a>
          </div>
          <div class="col mt-4 pt-5">
            <h4>Copyright © <?php echo date("Y"); ?> IDren</h4>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-5 pt-5">
        <img src="{{ asset('assets/img/Hero - Footer.png') }}" class="img-fluid">
      </div>
    </div>
  </div>
</body>
</html>
