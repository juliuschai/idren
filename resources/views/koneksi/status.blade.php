@extends('layouts.dashboard')

@section('title')
idREN Status Koneksi
@endsection

@section('content')
<!-- our services -->
<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Status Koneksi</h2>
		</div>
	</div>
</div>
<div class="container mt-5">
	<div class="row mx-2 shadow-sm rounded" style="background-color:#fff">
		<div class="col-md-12">
			<div class="container mt-5">
				<div class="row">
					<div class="col-md-3">
						<nav class="nav nav-pills nav-fill">
							<a class="nav-item nav-link text-dark" href="#"><strong>Koneksi Jaringan</strong></a>
						</nav>
					</div>
					<div class="col-md-2">
						<nav class="nav nav-pills nav-fill">
							<a class="nav-item nav-link bg-danger text-light rounded-pill" href="#">Belum Diajukan</a>
						</nav>
					</div>
					<div class="col-md-7">
						<nav class="nav nav-pills nav-fill rounded-pill">
							<a class="nav-item nav-link active" href="#">Layer 1</a>
							<a class="nav-item nav-link text-light" style="background-color:deepskyblue;" href="#">Layer 2</a>
							<a class="nav-item nav-link text-light" style="background-color:deepskyblue;" href="#">Layer 3</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 mb-5">
			<div class="container mt-5">
				<div class="row">
					<div class="col-md-3">
						<nav class="nav nav-pills nav-fill">
							<a class="nav-item nav-link text-dark" href="#"><strong>Eduroam</strong></a>
						</nav>
					</div>
					<div class="col-md-2">
						<nav class="nav nav-pills nav-fill">
							<a class="nav-item nav-link bg-success text-light rounded-pill" href="#">Telah Diajukan</a>
						</nav>
					</div>
					<div class="col-md-7">
						<nav class="nav nav-pills nav-fill rounded-pill">
							<a class="nav-item nav-link text-light" style="background-color:deepskyblue;" href="#">Layer 1</a>
							<a class="nav-item nav-link text-light" style="background-color:deepskyblue;" href="#">Layer 2</a>
							<a class="nav-item nav-link text-light" style="background-color:deepskyblue;" href="#">Layer 3</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection