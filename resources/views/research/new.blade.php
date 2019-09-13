  @extends('layouts.app')

@section('title')
idREN Research Collaboration
@endsection

@section('content')
  <!-- mobile navbar -->
  <div class="hmz-navbar-mobile container-fluid sticky-top shadow-sm" style="background-color: white">
{{-- 
    2 Login Sign up button idk what it is 
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center py-0">
        <div class="col-8 py-0">
          <a class="blog-header-logo text-dark d-inline" href="">
            <img src="assets/img/logo-red.png" class="d-inline" width="60em" height="auto" alt="">
            <h5 class="font-weight-normal d-inline font-dark"></h5>
          </a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
          <a class="btn btn-sm btn-outline-danger mr-3" href="">Sign up</a>
          <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modallogin">Sign in</button>
        </div>
      </div>
    </header>
 --}}
    <div class="nav-scroller">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted text-decoration-none" href="#">About</a>
        <a class="p-2 text-muted text-decoration-none" href="#">Resources</a>
        <a class="p-2 text-muted text-decoration-none" href="#">Services</a>
        <a class="p-2 text-danger text-decoration-none" href="#">Reasearch</a>
        <a class="p-2 text-muted text-decoration-none" href="#">Media</a>
        <a class="p-2 text-muted text-decoration-none" href="#">Recruitment</a>
        <a class="p-2 text-muted text-decoration-none" href="#">Case Studies</a>
        <a class="p-2 text-muted text-decoration-none" href="#">Collaboration</a>
        <a class="p-2 text-muted text-decoration-none" href="#">Grant</a>
        <a class="p-2 text-muted text-decoration-none" href="#">Journals</a>
      </nav>
    </div>
  </div>
  <div class="modal fade" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Sign in</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
                <button type="submit" class="btn btn-danger">Login</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <a class="dropdown-item" href="#">Forgot password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- content -->
  <div class="container mb-4">
    <div class="row">
      <div class="col-md-8 col-sm-12 mt-3">
        <div class="hmz-ajukan-penelitian">
          <h1 class="text-danger">Ajukan penelitian mu</h1>
        </div>
        <form method="POST" action="{{ route('research.new') }}" enctype="multipart/form-data">

            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

          @csrf
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label text-dark">Judul</label>
            <div class="col-sm-9">
              <input type="text" id="judul" name="judul" placeholder="" class="form-control" value="{{ old('judul') }}">
            </div>
          </div>
          <div class="form-group row">
            <label for="abstrak" class="col-sm-3 col-form-label text-dark">Abstraksi</label>
            <div class="col-sm-9">
              <textarea class="form-control" id="abstrak" name="abstrak" rows="5">{{ old('abstrak') }}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="kategori" class="col-sm-3 col-form-label text-dark">Kategori</label>
            <div class="col-sm-9">
              <select class="form-control" name="kategori[]" id="kategori">
                <option value="">Pilih Kategori Utama</option>
                <option value="IoT">IoT</option>
                <option value="Kota cerdas">Kota cerdas</option>
                <option value="Jaringan">Jaringan</option>
                <option value="Lorem">Lorem</option>
                <option value="Dolor siet">Dolor siet</option>
                <option value="Lorem">Lorem</option>
                <option value="Ipsum">Ipsum</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="IoT" name="kategori[]" class="custom-control-input" value="IoT">
                <label class="custom-control-label" for="IoT">IoT</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="jaringan" name="kategori[]" class="custom-control-input" value="Jaringan">
                <label class="custom-control-label" for="jaringan">Jaringan</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="kotaCerdas" name="kategori[]" class="custom-control-input" value="Kota cerdas">
                <label class="custom-control-label" for="kotaCerdas">Kota cerdas</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="dolorSiet" name="kategori[]" class="custom-control-input" value="Dolor siet">
                <label class="custom-control-label" for="dolorSiet">Dolor siet</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="ipsum" name="kategori[]" class="custom-control-input" value="Ipsum">
                <label class="custom-control-label" for="ipsum">Ipsum</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="lorem" name="kategori[]" class="custom-control-input" value="Lorem">
                <label class="custom-control-label" for="lorem">Lorem</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="kotaCerdas" name="kategori[]" class="custom-control-input" value="Kota cerdas">
                <label class="custom-control-label" for="kotaCerdas">Kota cerdas</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="dolorSiet" name="kategori[]" class="custom-control-input" value="Dolor siet">
                <label class="custom-control-label" for="dolorSiet">Dolor siet</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="ipsum" name="kategori[]" class="custom-control-input" value="Ipsum">
                <label class="custom-control-label" for="ipsum">Ipsum</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="lorem" name="kategori[]" class="custom-control-input" value="Lorem">
                <label class="custom-control-label" for="lorem">Lorem</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="IoT" name="kategori[]" class="custom-control-input" value="IoT">
                <label class="custom-control-label" for="IoT">IoT</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" id="jaringan" name="kategori[]" class="custom-control-input" value="Jaringan">
                <label class="custom-control-label" for="jaringan">Jaringan</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input class="custom-file-input" type="file" id="customFile" name="customFile" onchange="setfilename()">
              <label class="custom-file-label text-muted" id="fileLabel" for="customFile">Unggah file surat penugasan tim (L1)</label>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-auto ml-auto">
              <button type="submit" class="btn btn-danger">Ajukan Penelitian</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4 col-sm-12 mt-3">
        <h1 class="text-danger">Alur Pengajuan</h1>
        <!-- <img src="assets/img/download.png" class="" width="200px" height="auto" alt=""> -->
      </div>
    </div>
  </div>

  <!-- tags & quotes -->
  <div style="background-color:#f9f9f9;">
    <div class="container pb-5 pt-4">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-left text-dark">Kategori Populer</h3>
        </div>
      </div>
      <div class="row align-items-start">
        <div class="col-md-7 col-sm-12">
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Danger </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Lorem ipsum </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> IoT </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Lorem ipsum </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Jaringan </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Danger </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Lorem ipsum </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> IoT </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Lorem ipsum </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Jaringan </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Kota cerdas </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Mobil listrik </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Kapal </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Kota cerdas </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Mobil listrik </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Kapal </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Danger </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Lorem ipsum </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Danger </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Lorem ipsum </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> IoT </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Lorem ipsum </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Jaringan </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Kota cerdas </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Mobil listrik </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Kapal </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Danger </a></span>
          <span class="badge badge-pill badge-danger"><a href="" class="text-light text-decoration-none"> Lorem ipsum </a></span>
        </div>
        <div class="col-md-5 col-sm-0">
          <blockquote class="hmz-quotes blockquote text-right">
            <p class="mb-0">Kita bangsa besar, kita bukan bangsa tempe. Kita tidak akan mengemis, kita tidak akan minta-minta, apalagi jika bantuan-bantuan itu diembel-embeli dengan syarat ini syarat itu! Lebih baik makan gaplek tetapi merdeka, daripada makan bistik tapi budak"</p>
            <footer class="blockquote-footer"><cite title="Source Title"> Bung Karno </cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function setfilename() {
      var fileInput = document.getElementById('customFile');   
      if(fileInput.files.length > 0) {
        document.getElementById('fileLabel').innerHTML = fileInput.files[0].name;
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    var lastScroll = 0, hundert;
    $(window).scroll(function () {
      //NAVIGATION FADEIN/OUT
      var st = $(document).scrollTop();
      if (st > 250 && st > lastScroll) {
        $('.hmz-navbar-mobile').addClass('hidden');
        hundert = st;
      }
      else if (st < (hundert - 33)) {
        $('.hmz-navbar-mobile').removeClass('hidden');
      }
      lastScroll = st;
    });
  </script>
@endsection