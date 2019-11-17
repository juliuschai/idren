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
						<h1 class="text-danger" style="margin-top: 10px">Fitur ini segera tersedia!</h1>
					</div>
				</div>
			</div>
				<p class="mt-5"><span class="hmz-idren">IDREN</span> merupakan jaringan riset nasional antar institusi perguruan tinggi di Indonesia melalui efisiensi trafik domestik dan konektivitas ke REN global. Pemanfaatan <span class="hmz-idren">IDREN</span> meliputi sharing dan kolaborasi untuk berbagi pakai sumber daya pembelajaran berupa bahan perkuliahan, bahan pustaka, software, akses jaringan, journal online,HD videoconference.</p>

		</div>
	</div>

@endsection