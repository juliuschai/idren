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
		<h1 class="text-center pt-5 pb-5 font-weight-bold">Permintaan Koneksi</h1>
	</div>
	<div class="row">
		<table class="table table-borderless" style="border-collapse: collapse;">
            @foreach($obj2 as $sort) 
			<tr>
				<td style='padding-top:15px;width:60%;'>
					<div style='  border-radius: 50px 0px 0px 50px;
					background: #6397FF;
					padding: 0px;
					margin:0%; 
					width:100%;
					border:0%;
					height: 30px; '
					data-toggle="modal" data-target="#connection-detail-modal-{{$sort -> id }}">
					<h4 class='text-center text-white'>{{ $sort->instansi }}
					</h4>
					</div>
				</td>
				<td style="padding-top:15px;width:20%;">
				<a href="{{ route('p2.requestconnection.accept', ['id' => $sort->id]) }}" class="text-white">
					<div style="  border-radius: 0px 0px 0px 0px;
					background: #6644CC;
					padding: 0px;
					margin:0%;
					width:100%; 
					border:0%; 
					height: 30px;"><h4 class="text-center text-white">Terima</h4>
					</div>
				</a>
				</td>
				<td style="padding-top:15px;width:20%;">
				<a href="{{ route('p2.requestconnection.refuse', ['id' => $sort->id]) }}" class="text-white">
					<div style="  border-radius: 0px 50px 50px 0px;
					background: #F36B7F;
					padding: 0px;
					margin:0%;
					width:100%; 
					border:0%;
					height: 30px; "><h4 class="text-center text-white">Tolak</h4>
					</div>
				</a>
				</td>
			</tr>
			<div class="modal fade" id="connection-detail-modal-{{$sort -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Detail Request</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nama Instansi:</label>
										<input type="text" class="form-control" value="{{ $sort->instansi }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Unit Pengelola Jaringan:</label>
										<input type="text" class="form-control" value="{{ $sort->nama_unit_pengelola_jaringan }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nama Kepala Unit:</label>
										<input type="text" class="form-control" value="{{ $sort->nama_kepala_unit }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Email:</label>
										<input type="text" class="form-control" value="{{ $sort->email }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">No HP:</label>
										<input type="text" class="form-control" value="{{ $sort->nomer_hp }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Penanggung Jawab Jaringan:</label>
										<input type="text" class="form-control" value="{{ $sort->nama_penanggung_jawab_jaringan }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nomor ASN:</label>
										<input type="text" class="form-control" value="{{ $sort->nomor_asn }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Alamat IP:</label>
										<input type="text" class="form-control" value="{{ $sort->alamat_ip }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Penyedia Jasa Internet:</label>
										<input type="text" class="form-control" value="{{ $sort->nama_penyedia_jasa_internet }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nama PIC:</label>
										<input type="text" class="form-control" value="{{ $sort->nama_pic }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nomor HP PIC:</label>
										<input type="text" class="form-control" value="{{ $sort->nomor_hp_pic }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Bandwith Internet:</label>
										<input type="text" class="form-control" value="{{ $sort->bandwith_internet }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Penyedia Jasa Internet 2:</label>
										<input type="text" class="form-control" value="{{ $sort->nama_penyedia_jasa_internet_2 }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nama PIC 2:</label>
										<input type="text" class="form-control" value="{{ $sort->nama_pic_2 }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nomor HP PIC 2:</label>
										<input type="text" class="form-control" value="{{ $sort->nomor_hp_pic_2 }}" readonly>
									</div>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Bandwith Internet 2:</label>
										<input type="text" class="form-control" value="{{ $sort->bandwith_internet_2 }}" readonly>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
							</div>
						</div>
					</div>
            @endforeach
		</table>
	</div>
</div>

<div class="container">
		<div data-aos="fade-up" data-aos-duration="1500">
				<h1 class="text-center pt-5 pb-5 font-weight-bold">Permintaan Admin Universitas</h1>
			</div>
	<div class="row">
			<table class="table table-borderless" style="border-collapse: collapse;">
                    @foreach($obj as $sort)
                    <tr>
						<td style='padding-top:15px;width:60%;'data-toggle="modal" data-target="#request-detail-modal-{{$sort -> id }}">
							<div style='  border-radius: 50px 0px 0px 50px;
							background: #6397FF;
							padding: 0px;
							margin:0%; 
							width:100%;
							border:0%;
							height: 30px; '><h4 class='text-center text-white'>

                            @foreach (json_decode(stripslashes(($sort->data))) as $key=>$val)
                                @if($key == "nama_universitas")
                                    {{ $val }}  
                                @endif
                            @endforeach
                            </h4>
							</div>
						</td>
						<td style="padding-top:15px;width:20%;">
						<a href="{{ route('p2.adminconnection.accept',  ['id' => $sort->id]) }}" class="text-white">
							<div style="  border-radius: 0px 0px 0px 0px;
							background: #6644CC;
							padding: 0px;
							margin:0%;
							width:100%; 
							border:0%; 
							height: 30px;"><h4 class="text-center text-white">Terima</h4>
							</div>
						</a>
						</td>
						<td style="padding-top:15px;width:20%;">
						<a href="{{ route('p2.adminconnection.refuse', ['id' => $sort->id]) }}" class="text-white">
							<div style="  border-radius: 0px 50px 50px 0px;
							background: #F36B7F;
							padding: 0px;
							margin:0%;
							width:100%; 
							border:0%;
							height: 30px; "><h4 class="text-center text-white">Tolak</h4>
							</div>
						</a>
						</td>
					</tr>
					<div class="modal fade" id="request-detail-modal-{{$sort -> id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Detail Request</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Nama:</label>
										<input type="text" class="form-control" value="{{ $sort->name }}" readonly>
									</div>
									@php
									$image_url = '';
									@endphp
									@foreach (json_decode(stripslashes(($sort->data))) as $key=>$val)
									@php
										if($key == 'nama_universitas')
										$key = 'Nama Universitas';
										else if($key == 'nama_unit_it')
										$key = 'Nama Unit IT';
										else if($key == 'nama_kepala_unit')
										$key = 'Nama Kepala Unit';
										else if($key == 'email')
										$key = 'Email';
									@endphp
									@if($key != 'proof_url') 
									<div class="form-group">
										<label for="message-text" class="col-form-label">{{ $key }}:</label>
										<input type="text" class="form-control" value="{{ $val }} " readonly>
									</div>
									@endif
									@if($key == 'proof_url') 
									Bukti:
									<img style="width:100%;min-height:500px;" src="{{ $val }}"></img>
									@endif
									@endforeach
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
							</div>
						</div>
					</div>
                    @endforeach
				</table>
	</div>
</div>
<!-- event -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center pt-5 pb-5 font-weight-bold">Susun Proyek</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
			<div class="form-group">
					<label for="instansi_id">Pilih Instansi</label>
					<input name="instansi_id" id="instansi_id" class="form-control awesomplete" list="mylist">
						<datalist id="mylist">
							<option><?php $conn = new mysqli("localhost", "webidren", "R3ady2w3b!", "webidrendb2");
											$sql = 'SELECT instansi FROM universities order by instansi';
											$result = $conn ->query ($sql);
											if ($result->num_rows > 0) {
												while($row = $result->fetch_assoc())
												$i = $row["instansi"];
												echo "
												<option><a href='halu'>".$row["instansi"]."</a></option>"
												; } ?>
							</option>
						</datalist>
					</select>
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