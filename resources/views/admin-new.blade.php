<?php
$date = date("Y-M-D h:i:sa");
if(isset($_GET['submit'])){
	$conn = new mysqli("localhost", "webidren", "R3ady2w3b!", "webidrendb2");
	$sql = "INSERT INTO request_admin_instansi (verified_at) VALUES '$date'";
					$result = $conn ->query ($sql);

}
?>
@extends('layouts.dashboard')

@section('title')
idREN Dashboard
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
			<tr style="">
				<td style="padding:0%;">
					<div style="  border-radius: 50px 0px 0px 50px;
					background: #6397FF;
					padding: 0px;
					margin:0%; 
					witdh:60%;
					border:0%;
					height: 30px; "><h4 class="text-center text-white">Institut Teknologi Sepuluh Nopember</h4>
					</div>
				</td> 
				<td style="padding:0%;">
				<a href="#" class="text-white">
					<div style="  border-radius: 0px 0px 0px 0px;
					background: #6644CC;
					padding: 0px;
					margin:0%;
					witdh:20%; 
					border:0%; 
					height: 30px; "><h4 class="text-center text-white">Terima</h4>
					</div>
				</a>
				</td>
				<td style="padding:0%;">
				<a href="#" class="text-white">
					<div style="  border-radius: 0px 50px 50px 0px;
					background: #F36B7F;
					padding: 0px;
					margin:0%;
					witdh:20%; 
					border:0%;
					height: 30px; "><h4 class="text-center text-white">Tolak</h4>
					</div>
				</a>
				</td>
			</tr>
			<tr style="padding-top:15px">
					<td style="padding:0%;padding-top:15px">
						<div style="  border-radius: 50px 0px 0px 50px;
						background: #6397FF;
						padding: 0px;
						margin:0%; 
						witdh:60%;
						border:0%;
						height: 30px; "><h4 class="text-center text-white">Universitas Airlangga</h4>
						</div>
					</td> 
					<td style="padding:0%;padding-top:15px">
					<a href="#" class="text-white">
						<div style="  border-radius: 0px 0px 0px 0px;
						background: #6644CC;
						padding: 0px;
						margin:0%;
						witdh:20%; 
						border:0%; 
						height: 30px; "><h4 class="text-center">Terima</h4>
						</div>
					</a>
					</td>
					<td style="padding:0%;padding-top:15px">
					<a href="#" class="text-white">
						<div style="  border-radius: 0px 50px 50px 0px;
						background: #F36B7F;
						padding: 0px;
						margin:0%;
						witdh:20%; 
						border:0%;
						height: 30px; "><h4 class="text-center">Tolak</h4>
						</div>
					</a>
					</td>
				</tr>
		</table>
	</div>
</div>
<div class="container">
		<div data-aos="fade-up" data-aos-duration="1500">
				<h1 class="text-center pt-5 pb-5 font-weight-bold">Permintaan Admin Universitas</h1>
			</div>
	<div class="row">
			<table class="table table-borderless" style="border-collapse: collapse;">
					<?php $conn = new mysqli("localhost", "webidren", "R3ady2w3b!", "webidrendb2");
					$sql = 'SELECT *, request_admin_instansi.id AS rai FROM universities,users,request_admin_instansi where users.id = request_admin_instansi.user_id AND users.instansi_id = universities.id';
					$result = $conn ->query ($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){ if($row['verified_at'] == NULL || $row['verified_at'] == 0){ 
							$rai = $row['rai'];
							?>
					<tr>
						<td style='padding:0%;padding-top:15px'>
							<div style='  border-radius: 50px 0px 0px 50px;
							background: #6397FF;
							padding: 0px;
							margin:0%; 
							witdh:60%;
							border:0%;
							height: 30px; '><h4 class='text-center text-white'> <?php echo $row['instansi']  ?></h4>
							</div>
						</td>
						<td style="padding:0%;padding-top:15px">
						<a name="submit" id="submit" href='<?php echo "admin?a=".$rai; ?>' class="text-white">
							<div style="  border-radius: 0px 0px 0px 0px;
							background: #6644CC;
							padding: 0px;
							margin:0%;
							witdh:20%; 
							border:0%; 
							height: 30px; "><h4 class="text-center text-white">Terima</h4>
							</div>
							</a>
						</td>
						<td style="padding:0%;padding-top:15px">
						<a href="#" class="text-white">
							<div style="  border-radius: 0px 50px 50px 0px;
							background: #F36B7F;
							padding: 0px;
							margin:0%;
							witdh:20%; 
							border:0%;
							height: 30px; "><h4 class="text-center text-white">Tolak</h4>
							</div>
						</a>
						</td>
					</tr> <?php
					}}} ?>
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