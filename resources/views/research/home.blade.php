@extends('layouts.app')

@section('title')
idREN Research Collaboration
@endsection

@section('content')
  <!-- header -->
  <div class="container mt-3">
    <div class="row align-items-center">
      <div class="col-md-7">
        <h1 class="text-danger">Research Collaboration</h1>
        <p class="text-dark">Unite all researcher, lectures, and student all over Indonesia to solve your special problem for better indonesia</p>
      </div>
      <div class="col-md-5">
        <img src="assets/img/pablo-sign-up.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

  <!-- content -->
  <div class="pb-3 pt-3 hmz-bg-abu2">
    <div class="container">
      <div class="row mb-3 mt-3">
        <div class="col-auto mr-auto">
          <a href="{{ route('research.new')}}"><button type="button" class="btn btn-danger">Add Research</button></a>
        </div>
        <div class="col-auto">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-danger"><i class="fas fa-th-list"></i></button>
            <button type="button" class="btn btn-outline-danger"><i class="fas fa-th"></i></button>
            <button type="button" class="btn btn-outline-danger"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
      <div class="row mb-3 mt-3">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr class="bg-danger" style="color:#f9f9f9;">
                  <th scope="col" class="hmz-list-judul">Judul</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Pemilik</th>
                  <th scope="col" class="hmz-tgl">Tanggal</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($researches as $research)
                  <tr>
                    <td>{{ $research->judul }}</td>
                    <td>{{ $research->kategori }}</td>
                    <td>{{ $research->name }}</td>
                    <td style="" class="hmz-tgl">{{ $research->created_at }}</td>
                    <td>
                      <a href="{{ route('research.view', [$research->id]) }}">
                        <button class="btn btn-danger">
                          Details
                        </button>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $researches->render() }}
          </div>
        </div>
      </div>
{{--       <div class="row mb-3 mt-3">
        <div class="col-md-12">
          <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <div>
              <div class="btn-group mr-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-outline-danger" disabled>
                  <i class="fas fa-chevron-left"></i>
                </button>
              </div>
              <div class="btn-group mr-2" role="group" aria-label="Second group">
                <button type="button" class="btn btn-danger">1</button>
                <button type="button" class="btn btn-outline-danger">2</button>
                <button type="button" class="btn btn-outline-danger">3</button>
              </div>
              <div class="btn-group" role="group" aria-label="Third group">
                <button type="button" class="btn btn-outline-danger">
                  <i class="fas fa-chevron-right"></i>
                </button>
              </div>
            </div>
            <div class="input-group hmz-min-show">
              <div class="input-group-prepend">
                <button class="btn btn-danger" type="button"><i class="fas fa-list-ol"></i></button>
              </div>
              <select class="custom-select" id="inputGroupSelect01" style="border-color:#dc3545">
                <option selected>10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
              </select>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>

  <!-- tags & quotes -->
  <div class=" hmz-bg-abu2">
    <div class="container py-4">
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- mobile navabar -->
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