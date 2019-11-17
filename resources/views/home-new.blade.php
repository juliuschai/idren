@extends('layouts.dashboard')

@section('title')
idREN Dashboard
@endsection

@section('red-button')
<div class="col-md-12 text-center pt-3">
	<a class="mt-5 text-light text-center text-decoration-none" href="{{ route('home.requestadmin') }}" role="button">
		<p class="bg-danger rounded-pill">Jadi Admin Instansi</p>
	</a>
</div>
@endsection

@section('side-menu')
@if ($user->peran != 1)
	<a class="d-block text-light text-left ml-2 text-decoration-none" href="{{route('koneksi')}}">
		<p>Koneksi Request</p>
	</a>
@endif

<a class="d-block text-light text-left ml-2 text-decoration-none" href="#">
	<p>Beranda saya</p>
</a>
<a class="d-block text-light text-left ml-2 text-decoration-none" href="#">
	<p>Layanan</p>
</a>
<a class="d-block text-light text-left ml-2 text-decoration-none" href="#">
	<p>Event</p>
</a>
<a class="d-block text-light text-left ml-2 text-decoration-none" href="#">
	<p>Help & feedback</p>
</a>
<a class="d-block text-light text-left ml-2 text-decoration-none" href="{{route('about')}}">
	<p>FAQ</p>
</a>
<a class="d-block text-light text-left ml-2 text-decoration-none" href="{{route('logout')}}">
	<p>Logout</p>
</a>
@endsection

@section('content')
<!-- our services -->
<div class="container">
	@if (Session::has('message'))
	   <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<div data-aos="fade-up" data-aos-duration="1500">
		<h1 class="text-center pt-5 pb-5 font-weight-bold">Our Services</h1>
	</div>
	<div class="row">
		<div class="col-md-4 pb-4 pt-4">
			<div data-aos="fade-up" data-aos-duration="1500">
				<div class="card mx-auto shadow-sm" style="width: 18rem;">
					<img src="assets/img/pablo-bitcoin-mining.png" class="card-img-top" alt="Network Connectivity">
					<div class="card-body">
						<h5 class="card-title">Network Connectivity</h5>
						<p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
						<a href="#" class="btn btn-primary">Link</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 pb-4 pt-4">
			<div data-aos="fade-up" data-aos-duration="1500">
				<div class="card mx-auto shadow-sm" style="width: 18rem;">
					<img src="assets/img/pablo-delete-confirmation.png" class="card-img-top" alt="Video Conference">
					<div class="card-body">
						<h5 class="card-title">Video Conference</h5>
						<p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
						<a href="#" class="btn btn-primary">Link</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 pb-4 pt-4">
			<div data-aos="fade-up" data-aos-duration="1500">
				<div class="card mx-auto shadow-sm" style="width: 18rem;">
					<img src="assets/img/pablo-sign-up.png" class="card-img-top" alt="Research Colaboration">
					<div class="card-body">
						<h5 class="card-title">Research Colaboration</h5>
						<p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
						<a href="#" class="btn btn-primary">Link</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 pb-4 pt-4">
			<div data-aos="fade-up" data-aos-duration="1500">
				<div class="card mx-auto shadow-sm" style="width: 18rem;">
					<img src="assets/img/pablo-artifficial-intelligence.png" class="card-img-top" alt="Training and Certification">
					<div class="card-body">
						<h5 class="card-title">Training and Certification</h5>
						<p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
						<a href="#" class="btn btn-primary">Link</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 pb-4 pt-4">
			<div data-aos="fade-up" data-aos-duration="1500">
				<div class="card mx-auto shadow-sm" style="width: 18rem;">
					<img src="assets/img/pablo-page-not-found.png" class="card-img-top" alt="Journal Repository">
					<div class="card-body">
						<h5 class="card-title">Journal Repository</h5>
						<p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
						<a href="#" class="btn btn-primary">Link</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- event -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center pt-5 pb-5 font-weight-bold">Event</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card m-4 shadow-sm">
				<a class="text-decoration-none text-dark" href="#">
					<img src="https://dummyimage.com/1080x400" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-center">Seminar Aerodinamika ITB</h5>
						<p class="card-text"></p>
						<p class="card-text text-center"><small class="text-muted">30 / 06 / 2019</small></p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Video -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center pt-5 pb-5 font-weight-bold">Rekomendasi Video</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4 pb-4 pt-4">
			<div data-aos="fade-up" data-aos-duration="1500">
				<div class="card mx-auto shadow-sm" style="width: 18rem;">
					<img src="assets/img/pablo-bitcoin-mining.png" class="card-img-top" alt="Network Connectivity">
					<div class="card-body">
						<h5 class="card-title text-center">Web Technology</h5>
						<p class="card-text text-center">Jaringan khusus tertutup nasional (National closed network).</p>
						<!-- <a href="#" class="btn btn-primary">Link</a> -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 pb-4 pt-4">
			<div data-aos="fade-up" data-aos-duration="1500">
				<div class="card mx-auto shadow-sm" style="width: 18rem;">
					<img src="assets/img/pablo-delete-confirmation.png" class="card-img-top" alt="Video Conference">
					<div class="card-body">
						<h5 class="card-title text-center">Human Interaction</h5>
						<p class="card-text text-center">Jaringan khusus tertutup nasional (National closed network).</p>
						<!-- <a href="#" class="btn btn-primary">Link</a> -->
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 pb-4 pt-4">
			<div data-aos="fade-up" data-aos-duration="1500">
				<div class="card mx-auto shadow-sm" style="width: 18rem;">
					<img src="assets/img/pablo-sign-up.png" class="card-img-top" alt="Research Colaboration">
					<div class="card-body">
						<h5 class="card-title text-center">Machine Learning</h5>
						<p class="card-text text-center">Jaringan khusus tertutup nasional (National closed network).</p>
						<!-- <a href="#" class="btn btn-primary">Link</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection