@extends('layouts.dashboard')

@section('title')
idREN Verifikasi Koneksi
@endsection

@section('content')
<div class="container">
	<div class="row mb-3 mt-5">
		<div class="col-md-12">
			<h3 class="text-center">Permintaan Koneksi</h3>
		</div>
	</div>
	<div class="row px-3">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama Instansi</th>
						<th scope="col">Nama Peminta</th>
						<th scope="col">Email Peminta</th>
						<th scope="col text-center" colspan="2">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($koneksis as $koneksi)
					<tr>
						<td>{{ $koneksi->instansi }}</td>
						<td>{{ $koneksi->name }}</td>
						<td>{{ $koneksi->email }}</td>
						<td>
							<a class="link-unstyled" href="{{ route('koneksi.view', [$koneksi->id]) }}">
								<button type="submit" class="btn btn-primary">
									Details
								</button>
							</a>
						</td>
						<td>
							<form method="POST" action="{{ route('koneksi.delete') }}">
								@csrf
								<input type="text" name="id" value="{{ $koneksi->id }}" hidden>
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="container">
	<div class="row mb-3 mt-5">
		<div class="col-md-12">
			<h3 class="text-center">
				Susun Proyek
			</h3>
		</div>
	</div>
	<div class="row px-3">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Tugas</th>
						<th scope="col text-center">Penangung Jawab</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Layer 1</td>
						<td>
							<div class="form-group">
								<select class="form-control" id="exampleFormControlSelect1">
									<option>Telkom</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td>Ketik sugas</td>
						<td>
							<div class="form-group">
								<select class="form-control" id="exampleFormControlSelect1">
									<option>Pilih Penangung jawab</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection