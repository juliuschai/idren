@extends('layouts.app')

@section('title')
	idREN About
@endsection

@section('content')
	<!-- penjelasan -->

	{{-- 
		Login Signin Button built-in langsung muncul di page nya
		<div class="btn-group hmz-signin">
      <button type="button" class="btn btn-danger dropdown-toggle rounded-pill" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sign in </button>
      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-198px, 38px, 0px);">
        <form class="px-4 py-3">
          <div class="form-group">
            <label for="emailnya">Email address</label>
            <input type="email" class="form-control" id="emailnya" placeholder="email@example.com" style="min-width: 15em; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">
          </div>
          <div class="form-group">
            <label for="passwordnya">Password</label>
            <input type="password" class="form-control" id="passwordnya" placeholder="Password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);">
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
    </div> --}}
	<div class="container mb-5">
		<div class="row align-items-center">
			<div class="col">
				<div class="row">
					<div class="col-md-12 hmz-judul">
						<h2 class="text-danger">Tentang IDREN</h2>
					</div>
					<p class="mt-5"><span class="hmz-idren">IDREN</span> merupakan jaringan riset nasional antar institusi perguruan tinggi di Indonesia melalui efisiensi trafik domestik dan konektivitas ke REN global. Pemanfaatan <span class="hmz-idren">IDREN</span> meliputi sharing dan kolaborasi untuk
						berbagi pakai sumber daya pembelajaran berupa bahan perkuliahan, bahan pustaka, software, akses jaringan, journal online,HD videoconference.</p>
				</div>
			</div>
			<div class="col-6">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/92QjOEmhpt0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- dasar pemikiran -->
	<div class="hmz-bg-abu2 py-4">
		<div class="container">
			<div class="row">
				<div class="col-auto mr-auto hmz-judul">
					<h2 class="text-center text-danger">Pentahelix</h2>
				</div>
				<div class="col-auto">
					<a class="btn btn-md btn-outline-danger" href="">Pelajari lebih lanjut</a>
				</div>
			</div>
		</div>
		<div class="container mt-3">
			<div class="row">
				<p><span class="hmz-idren">IDREN</span> merupakan bentuk implementasi dari konsep Pentahelix yang terdiri dari lima komponen penyusunnya yaitu:</p>
			</div>
		</div>
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-12 mx-0 my-0 px-0 py-0">
					<div class="card-deck">
						<div class="card border-danger">
							<img src="https://dummyimage.com/500" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title text-danger">INDUSTRI</h5>
								<p class="card-text">Dunia bisnis / industri berperan dalam menyediakan dan meningkatkan kualitas dan jangkauan ICT di seluruh tanah air melalui sinergi link & match dengan perguruan tinggi</p>
							</div>
						</div>
						<div class="card border-danger">
							<img src="https://dummyimage.com/500" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title text-danger">KOMUNITAS</h5>
								<p class="card-text">Komunitas / lembaga riset adalah lembaga riset berperan dalam mendukung perkembangan industri kreatif digital dengan membuka akses interaksi antara lembaga riset ilmiah dengan peningkatan kompetensi </p>
							</div>
						</div>
						<div class="card border-danger">
							<img src="https://dummyimage.com/500" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title text-danger">MEDIA</h5>
								<p class="card-text">Media berperan sebagai expander dalam menghubungkan seluruh stakeholder dengan pasar industri kreatif digital nasional</p>
							</div>
						</div>
						<div class="card border-danger">
							<img src="https://dummyimage.com/500" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title text-danger">PEMERINTAH</h5>
								<p class="card-text">Pemerintah dalam hal ini Kemristekdikti berperan dalam mengaturregulasi yang membantu industri kreatif digital sekaligus menjadi koordinator seluruh stakeholder</p>
							</div>
						</div>
						<div class="card border-danger">
							<img src="https://dummyimage.com/500" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title text-danger">PENDIDIKAN TINGGI</h5>
								<p class="card-text">Akademisi universitas adalah perguruan tinggi negeri dan swasta sebagai stakeholder utama sekaligus sebagai pengguna utama yang memanfaatkan jaringan IDREN untuk keperluan riset</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- member -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-auto mr-auto hmz-judul">
				<h2 class="text-center text-danger">idREN Member</h2>
			</div>
			<div class="col-auto">
				<a class="btn btn-md btn-outline-danger" href="">Lihat semua member</a>
			</div>
		</div>
	</div>
	<div class="container-fluid px-0 mt-4">
		<div class="col-md-12 my-3">
			<div class="hmz-member owl-carousel owl-theme">
				<div class="hmz-item">
					<img src="assets/img/univ/ITB.png" alt="" class="">
					<p class="hmz-nama-univ text-dark text-center">Institut Teknologi Bandung</p>
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/IPB.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/ITS.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/UGM.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/UI.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/UNAIR.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/UNJ.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/UPI.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/BINUS.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/PPNS.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/UB.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/UNDIP.png" alt="" class="img-fluid">
				</div>
				<div class="hmz-item">
					<img src="assets/img/univ/UNS.png" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- testimoni -->
	<div class="my-5" style="background-color:#f9f9f9;padding-top:1em;border-top:.1em solid #f1f1f1;border-bottom:.1em solid #f1f1f1;">
		<div class="container" style="">
			<div class="row align-items-auto">
				<div class="col-auto mr-auto hmz-judul">
					<h2 class="text-center text-danger" style="bor">Apa Kata Mereka</h2>
				</div>
				<div class="col-auto">
					<a class="btn btn-md btn-outline-danger" href="">Lihat Rekomendasi lainnya</a>
				</div>
			</div>
		</div>
		<div class="container-fluid mt-4">
			<div class="row align-items-center">
				<div class="col-md-1 owl-nav-testi" id="owl-nav-testi-left">
					<p class="text-right">
						<a class="text-danger customPrevBtn" style="font-size:2em;">
							<i class="fas fa-chevron-left"></i>
						</a>
					</p>
				</div>
				<div class="col-md-10 my-3">
					<div class="hmz-testi owl-carousel owl-theme">
						<div class="hmz-item-testi">
							<div class="row align-items-center">
								<div class="col-md-2">
									<div class="hmz-frame rounded-circle px-1 py-1 bg-danger">
										<img src="https://dummyimage.com/200" class="rounded-circle" alt="">
									</div>
								</div>
								<div class="col-md-10">
									<blockquote class="blockquote">
										<p class="mb-0">"Dengan adanya <span class="hmz-idren">IDREN</span>, akses bagi setiap civitas perguruan tinggi untuk saling berbagi data atau sumber untuk riset bisa lebih banyak dan mudah didapat"</p>
										<footer class="blockquote-footer font-weight-bold">Prof. H. Mohamad Nasir, Ph.D., Ak. <br> <cite title="Source Title">Mentri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia</cite></footer>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="hmz-item-testi">
							<div class="row align-items-center">
								<div class="col-md-2">
									<div class="hmz-frame rounded-circle px-1 py-1 bg-danger">
										<img src="https://dummyimage.com/200" class="rounded-circle" alt="">
									</div>
								</div>
								<div class="col-md-10">
									<blockquote class="blockquote">
										<p class="mb-0">"Dengan adanya <span class="hmz-idren">IDREN</span>, akses bagi setiap civitas perguruan tinggi untuk saling berbagi data atau sumber untuk riset bisa lebih banyak dan mudah didapat"</p>
										<footer class="blockquote-footer">Prof. Dr. Ir. Samsul Rizal, M.Eng <br> <cite title="Source Title">Rektor Universitas Syiah Kuala</cite></footer>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="hmz-item-testi">
							<div class="row align-items-center">
								<div class="col-md-2">
									<div class="hmz-frame rounded-circle px-1 py-1 bg-danger">
										<img src="https://dummyimage.com/200" class="rounded-circle" alt="">
									</div>
								</div>
								<div class="col-md-10">
									<blockquote class="blockquote">
										<p class="mb-0">"Harapan saya ke depan kiranya <span class="hmz-idren">IDREN</span> semakin berperan dalam infrastruktur digital yang bermanfaat untuk kegiatan pendidikan dan penelitian serta berkontribusi positif atas majunya pendidikan di Indoensia"</p>
										<footer class="blockquote-footer">Dr. Ir. Ellen Jian Kumaat, M.Sc., DEA <br> <cite title="Source Title">Rektor Universitas Sam Ratulangi Manado</cite></footer>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="hmz-item-testi">
							<div class="row align-items-center">
								<div class="col-md-2">
									<div class="hmz-frame rounded-circle px-1 py-1 bg-danger">
										<img src="https://dummyimage.com/200" class="rounded-circle" alt="">
									</div>
								</div>
								<div class="col-md-10">
									<blockquote class="blockquote">
										<p class="mb-0">"Infrastruktur <span class="hmz-idren">IDREN</span> ini akan memfasilitasi kolaborasi antar Perguruan Tinggi dalam kegiatan pembelajaran (daring), penelitian bersama dan pemanfaatan bersama sumber daya"</p>
										<footer class="blockquote-footer">Prof. Intan Ahmad, Ph.D <br> <cite title="Source Title">Dirjen Belmawa Kemristekdikti</cite></footer>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1 owl-nav-testi" id="owl-nav-testi-right">
					<p class="text-left">
						<a class="text-danger customNextBtn" style="font-size:2em;">
							<i class="fas fa-chevron-right"></i>
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- ajakan -->
	<div class="container mt-5 mb-5">
		<div class="row align-items-center">
			<div class="col-md-12 text-center">
				<a class="btn btn-danger" href="#">Gimana, tertarik? ayo segera daftarkan insitusi mu</a>
			</div>
		</div>
	</div>
@endsection