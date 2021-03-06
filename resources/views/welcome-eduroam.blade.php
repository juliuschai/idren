@extends('layouts.app')

@section('title')
iDREN
@endsection

@section('content')
  <!-- Navbar selesai -->
  <div class="container-fluid pt-5 pr-0 pb-5 mt-5 mb-5">
    <div class="row mr-3 pb-4 mt-5 pt-2">
      <div class="col-md-5 ml-5 pr-0 mr-0 ">
          {{-- <div>Temp Dosen Display</div>
          <table>
            @foreach($dosens as $dosen)
            <tr>
              <td><img class="rounded-circle" style="height: 50px; width: 50px" src="{{asset($dosen->profile_picture ? 'profilepictures/'.$dosen->profile_picture : 'profilepictures/dummy.png')}}" alt=""></td>
              <td>{{ $dosen->name }}</td>
              <td>{{ $dosen->views }} views</td>
              <td><a href="{{route('profile.view', ['username' => $dosen->username])}}">link</a></td>
            </tr>
            @endforeach
          </table>
          <div>Temp Vid Display</div>
          @foreach($universities as $university)
          <table border="1px">
            <tr>
              <td colspan="4">{{$university->instansi}}</td>
            </tr>
            @foreach($university->videos as $video)
            <tr>
              <td><img class="rounded-circle"  src="{{asset($video->thumbnail ? 'thumbnail/'.$video->thumbnail : 'profilepictures/dummy.png')}}" alt=""></td>
              <td>{{ $video->judul }}</td>
              <td>{{ $video->views }} views</td>
              <td><a href="{{route('video.view', ['id' => $video->file_name])}}">link</a></td>
            </tr>
            @endforeach
          </table>
          @endforeach --}}
        <h1 class="font-weight-bold" style="font-size: 54px">Indonesia<br>
          research and<br>
          education network</h1>
        <div class="text-wrap mt-3">
          <p>Jaringan khusus tertutup nasional (National closed network) yang menghubungkan institusi dan komunitas pendidikan dan riset di Indonesia.</p>
        </div>
        <div class="row">
          <div class="col-md-3 mr-0 pr-0">
            <div class=" mt-3 pt-3">
              @guest
                <a href="{{route('login')}}">
                  <button type="button" class="btn btn-danger " style="border-radius: 30px; color:white;font-size: 14px">
                    &nbsp;&nbsp;&nbsp;&nbsp; Sign in &nbsp;&nbsp;&nbsp;&nbsp;
                  </button>
                </a>
              @endguest
            </div>
          </div>
        </div>
        <br>
      </div>
      <div class="col-md-6 pl-0 ml-0">
        <img src="assets/img/Hero - Header.png" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="container-fluid px-0 mt-4">
    <div class="col-md-12 my-3">
      <div class="hmz-member owl-carousel owl-theme">
        <div class="hmz-item">
          <img src="assets/img/univ/IPB.png" alt="" class="">
          <!-- <p class="hmz-nama-univ text-dark text-center">Institut Teknologi Bandung</p> -->
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/ITB.png" alt="" class="img-fluid">
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
          <img src="assets/img/univ/UB.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4 pt-5">
    <div class="row">
      <div class="col-sm-5">
      <img src="assets/img/gurl.jpg" alt="" width="100%">
      </div>
      <div class="col">
        <h1 class="text-center pt-5 pb-5 font-weight-bold">Eduroam</h2>
        <p class="text-center">
			Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network)
		</p>
      </div>
    </div>
  </div>
  <!-- ################# Header selesai ################# -->

  <!-- ################# Content 1 selesai ################# -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
  </script>
  <script>
    var lastScroll = 0, hundert;
    $(window).scroll(function () {
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
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  <script>
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 100,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 4,
            nav: false,
            loop: false
          }
        }
      });
    });
  </script>
  <script>
    // punyanya owl craousel nya member
    $('.hmz-member').owlCarousel({
      stagePadding: 50,
      loop: true,
      margin: 30,
      nav: false,
      autoplay: true,
      autoplayTimeout: 800,
      autoplayHoverPause: true,
      dots: false,
      responsive: {
        0: {
          items: 6
        },
        600: {
          items: 8
        },
        1000: {
          items: 12
        }
      }
    })
  </script>
@endsection