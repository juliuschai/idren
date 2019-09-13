<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>@yield('title')</title>

  <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/fav/favicon-16x16.png">
  <link rel="manifest" href="assets/icon/fav/site.webmanifest">
  <link rel="mask-icon" href="assets/icon/fav/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#f9f9f9">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style/style.css">
  <link rel="stylesheet" href="assets/style/style-rc.css">
  <link rel="stylesheet" href="assets/style/media-querys.css">
  <link rel="stylesheet" href="assets/style/media-querys-rc.css">
  <link rel="stylesheet" href="assets/style/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/style/owl.theme.default.min.css">

  <style>
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2" style="background-color: #333;">
        <div class="container px-0 sticky-top">
          <div class="row px-0">
            <div class="col-md-12 text-center">
              <img src="assets/img/logo-white.png" class="img-fluid mt-4 mb-5" width="40em" alt="">
            </div>
            <div class="col-md-12 text-center pt-3">
              <a class="mt-5 text-light text-center text-decoration-none" href="#">
                <p class="bg-danger rounded-pill">Admin Instansi</p>
              </a>
            </div>
            <div class="col-md-12 pr-0 text-center mt-2">
              <div class="menu">
                <a class="d-block text-light text-left ml-2 text-decoration-none" href="{{route('koneksi')}}">
                  <p>Koneksi Request</p>
                </a>
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
                  <p>About</p>
                </a>
                <a class="d-block text-light text-left ml-2 text-decoration-none" href="{{route('profile.change')}}">
                  <p>Profile</p>
                </a>
                <a class="d-block text-light text-left ml-2 text-decoration-none" href="{{route('logout')}}">
                  <p>Logout</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-10 px-0" style="background-color: #f6f3ff">
        <!-- navigation bar -->
        <div class="hmz-navbar d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm sticky-top">
          <h5 class="my-0 mr-md-auto font-weight-normal">
            <!-- <img src="assets/img/logo.png" alt="" class="" style="width: 8em;height: auto;"> -->
          </h5>
          <nav class="my-2 my-md-0 mr-md-3" style="">
            <a class="p-2 text-dark text-decoration-none" href="{{route('koneksi')}}">Koneksi Request</a>
            <a class="p-2 text-dark text-decoration-none" href="{{route('about')}}">About idREN</a>
            <a class="p-2 text-dark text-decoration-none" href="#">Resources</a>
            <a class="p-2 text-dark text-decoration-none" href="#">Services</a>
            <a class="p-2 text-dark text-decoration-none" href="{{route('research')}}">Reasearch</a>
            <a class="p-2 text-dark text-decoration-none" href="#">Media</a>
            <a class="p-2 text-dark text-decoration-none" href="{{route('profile.change')}}">Profile</a>
            <a class="p-2 text-dark text-decoration-none" href="{{route('logout')}}">Logout</a>
          </nav>

          <a href="#" class="px-4 text-decoration-none" style="border-right: 1px solid #f0f0f0;border-left: 1px solid #f0f0f0;">
            <div class="d-inline-block rounded-circle bg-danger p-1">
              <img class="rounded-circle" src="{{asset(auth()->user()->profile_picture ? 'profilepictures/'.auth()->user()->profile_picture : 'profilepictures/dummy.png')}}" alt="">
            </div>
            <p class="d-inline text-dark ml-1">{{ auth()->user()->name }}</p>
          </a>

          <a class=" p-2 text-dark text-decoration-none" href="#">
            <a class="btn btn-outline-danger my-md-0 mr-md-3 hmz-signup rounded-circle" href="#"><i class="far fa-bell"></i></a>
          </a>

          <a class="p-2 text-dark text-decoration-none" href="#" style="padding-top: 100%; ">
            <a class="btn btn-outline-danger my-md-0 mr-md-3 hmz-signup rounded-circle" href="#"><i class="fas fa-cog"></i></a>
          </a>
        </div>
        <main>
          @yield('content')
        </main>
        <!-- footer -->
        <div class="container mt-5 pt-5">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">Copyright <i class="fas fa-copyright"></i> 2019 idREN</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

  <script>
    // mobile navabar
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

    // event
    $('.hmz-event').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>
</body>

</html>