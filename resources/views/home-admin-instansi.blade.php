@extends('layouts.dashboard')

@section('title')
idREN Dashboard
@endsection

@section('red-button')
<div class="col-md-12 text-center pt-3">
	<a class="mt-5 text-light text-center text-decoration-none" href="{{ route('koneksi') }}" role="button">
		<p class="bg-danger rounded-pill">Permintaan Koneksi</p>
	</a>
</div>
@endsection

@section('side-menu')
<a class="d-block text-light text-left ml-2 text-decoration-none" href="#">
	<p>Beranda saya</p>
</a>
<a class="d-block text-light text-left ml-2 text-decoration-none" href="#">
	<p>Monitor</p>
</a>
<a class="d-block text-light text-left ml-2 text-decoration-none" href="#">
	<p>Member</p>
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
		<h1 class="text-center pt-5 pb-5 font-weight-bold">Status Koneksi</h1>
	</div>
	<div class="card mx-auto shadow-sm">
		<div class="card-body">
			<div class="row">
				<table class="table table-borderless">
					<tbody>
						<tr>
							<td>Koneksi</td>
							<td><div style="background-color:#F36B7F; border-radius:16px; padding: 5px 10px 5px 10px; text-align:center; width:100%; max-width: 300px; color: white; border: none; ">Belum diajukan</div></td>
							<td>
							<td><div style="background-color:#6097F6; border-radius:16px; padding: 5px 10px 5px 10px; text-align:center; width:100%; max-width: 300px; color: white; border: none; ">Layer 1</div></td>
							<td><div style="background-color:#9FBFFF; border-radius:16px; padding: 5px 10px 5px 10px; text-align:center; width:100%; max-width: 300px; color: white; border: none; ">Layer 2</div></td>
							<td><div style="background-color:#9FBFFF; border-radius:16px; padding: 5px 10px 5px 10px; text-align:center; width:100%; max-width: 300px; color: white; border: none; ">Layer 3</div></td>
							</td>
						</tr>
						<tr>
							<td>Eduroam</td>
							<td><div style="background-color:#6644CC; border-radius:16px; padding: 5px; width:100%; text-align: center; max-width: 300px; color: white; border: none;">Telah diajukan</div></td>
							<td>
							<td><div style="background-color:#9FBFFF; border-radius:16px; padding: 5px 10px 5px 10px; text-align:center; width:100%; max-width: 300px; color: white; border: none; ">Layer 1</div></td>
							<td><div style="background-color:#6097F6; border-radius:16px; padding: 5px 10px 5px 10px; text-align:center; width:100%; max-width: 300px; color: white; border: none; ">Layer 2</div></td>
							<td><div style="background-color:#9FBFFF; border-radius:16px; padding: 5px 10px 5px 10px; text-align:center; width:100%; max-width: 300px; color: white; border: none; ">Layer 3</div></td>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div data-aos="fade-up" data-aos-duration="1500">
		<h1 class="text-center pt-5 pb-5 font-weight-bold">Permintaan dari member</h1>
	</div>
	<div class="card mx-auto shadow-sm">
		<div class="card-body">
			<div class="row">
				<table class="table table-borderless">
					<tbody>
						<tr>
							<td>Username<br><p style="color:grey;">Akses video conference</p></td>
							<td><button style="background-color:#6644CC; border-radius:16px; padding: 5px; width:100%; max-width: 200px; color: white; border: none;">Berikan</button></td>
							<td><button style="background-color:#F36B7F; border-radius:16px; padding: 5px; width:100%; max-width: 200px; color: white; border: none;">Tolak</button></td>
						</tr>
						<tr>
							<td>Username<br><p style="color:grey;">Akses video conference</p></td>
							<td><button style="background-color:#6644CC; border-radius:16px; padding: 5px; width:100%; max-width: 200px; color: white; border: none;">Berikan</button></td>
							<td><button style="background-color:#F36B7F; border-radius:16px; padding: 5px; width:100%; max-width: 200px; color: white; border: none;">Tolak</button></td>
						</tr>
						<tr>
							<td>Username<br><p style="color:grey;">Akses video conference</p></td>
							<td><button style="background-color:#6644CC; border-radius:16px; padding: 5px; width:100%; max-width: 200px; color: white; border: none;">Berikan</button></td>
							<td><button style="background-color:#F36B7F; border-radius:16px; padding: 5px; width:100%; max-width: 200px; color: white; border: none;">Tolak</button></td>
						</tr>
						<tr>
							<td>Username<br><p style="color:grey;">Akses video conference</p></td>
							<td><button style="background-color:#6644CC; border-radius:16px; padding: 5px; width:100%; max-width: 200px; color: white; border: none;">Berikan</button></td>
							<td><button style="background-color:#F36B7F; border-radius:16px; padding: 5px; width:100%; max-width: 200px; color: white; border: none;">Tolak</button></td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!--
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
	-->
</div>

<!-- event -->
<!--
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
-->
<!-- Video -->
<!--
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
-->
@endsection