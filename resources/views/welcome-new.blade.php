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
      <div class="hmz-member owl-carousel owl-theme">
        <div class="hmz-item">
          <img src="assets/img/univ/IPB.png" alt="">
          <!-- <p class="hmz-nama-univ text-dark text-center">Institut Teknologi Bandung</p> -->
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/ITB.png" alt="">
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/ITS.png" alt="">
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/UGM.png" alt="">
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/UI.png" alt="">
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/UNAIR.png" alt="">
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/UNJ.png" alt="">
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/UPI.png" alt="">
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/UB.png" alt="">
        </div>
        <div class="hmz-item">
          <img src="assets/img/univ/UNIMAL.png" alt="">
        </div>
      </div>
  </div>
  <div class="container mt-4 pt-5">
    <div class="row">
      <div class="col-sm">
	  <br><br>
      <img src="assets/img/gurl.jpg" alt="Picture_Front" width="100%">
      </div>
      <div class="col-sm">
        <h1 class="text-center pt-5 pb-5 font-weight-bold">IDREN</h2>
        <p class="text-center">
            Jejaring Riset dan Edukasi Indonesia (Indonesia Research and Education Networks, IDREN) adalah infrastruktur jaringan khusus yang menghubungkan institusi dan komunitas riset dan pendidikan di Indonesia. Jaringan ini didedikasikan untuk konektivitas komunikasi data yang diperlukan untuk memungkinkan komunitas para peneliti, akademisi dan pengembang untuk berkolaborasi bersama. 
            Infrastruktur jaringan IDREN terwujud berkat dukungan dan kolaborasi antara komunitas industri telekomunikasi (operator jaringan, penyedia layanan internet) yang mengelola konektivitas sampai layer dua (fisik) dan komunitas riset dan pendidikan  yang mengelola konektivitas di layer tiga (jaringan), serta dukungan konektivitas menuju REN global (TEIN) dari Kementerian Riset, Teknologi dan Pendidikan Tinggi.
            Dengan konektivitas IDREN ke REN global melalui jaringan TEIN (Trans Euroasia Information Network).            
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="container">
      <div data-aos="fade-up" data-aos-duration="1500">
          <h1 class="text-center pt-5 pb-5 font-weight-bold">How to Connect</h1>
        </div>
        <p>
            <b>Institusi Riset/Pendidikan/Industri dapat bergabung dengan :</b>
Mendaftar (sign up) melalui website idren.id, atau ke hello@idren.id sebagai admin institusi.
Mengisi form permintaan koneksi IDREN melalui admin institusi. 
Menunggu tanggapan dari tim admin jaringan IDREN.</p><p>
<b>Pribadi (dosen, peneliti, mahasiswa, praktisi industri) dapat bergabung dengan :</b>
Mendaftar (sign up) melalui website idren.id atau ke hello@idren.id sebagai anggota/dosen/mahasiswa/umum.
Menunggu validasi dan konfirmasi dari admin institusi.

        </p>
    </div>
  </div>
  <!-- ################# Header selesai ################# -->
  <div class="container">
    <div data-aos="fade-up" data-aos-duration="1500">
      <h1 class="text-center pt-5 pb-5 font-weight-bold">Our Services</h1>
    </div>
    <div class="row">
      <div class="col-md-4 pb-4 pt-4">
        <div data-aos="fade-up" data-aos-duration="1500">
          <div class="card mx-auto" style="width: 18rem;">
            <img src="assets/img/pablo-bitcoin-mining.png" class="card-img-top" alt="Network Connectivity">
            <div class="card-body">
              <h5 class="card-title">Network Connectivity</h5>
              <p class="card-text">Get connected to our private network and get the benefits.</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-4 pt-4">
        <div data-aos="fade-up" data-aos-duration="1500">
          <div class="card mx-auto" style="width: 18rem;">
            <img src="assets/img/pablo-delete-confirmation.png" class="card-img-top" alt="Video Conference">
            <div class="card-body">
              <h5 class="card-title">Video Conference</h5>
              <p class="card-text">Live video call with any IDren member, your next meeting don't need the tiring trip.</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-4 pt-4">
        <div data-aos="fade-up" data-aos-duration="1500">
          <div class="card mx-auto" style="width: 18rem;">
            <img src="assets/img/pablo-sign-up.png" class="card-img-top" alt="Research Colaboration">
            <div class="card-body">
              <h5 class="card-title">Research Colaboration</h5>
              <p class="card-text">Unite all researcher, lectures, and student all over Indonesia to solve your special problem.</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-4 pt-4">
        <div data-aos="fade-up" data-aos-duration="1500">
          <div class="card mx-auto" style="width: 18rem;">
            <img src="assets/img/pablo-artifficial-intelligence.png" class="card-img-top" alt="Training and Certification">
            <div class="card-body">
              <h5 class="card-title">Training and Certification</h5>
              <p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-4 pt-4">
        <div data-aos="fade-up" data-aos-duration="1500">
          <div class="card mx-auto" style="width: 18rem;">
            <img src="assets/img/pablo-page-not-found.png" class="card-img-top" alt="Journal Repository">
            <div class="card-body">
              <h5 class="card-title">Journal Repository</h5>
              <p class="card-text">Any local journal from all over Indonesia in your hand.</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 pb-4 pt-4">
          <div data-aos="fade-up" data-aos-duration="1500">
            <div class="card mx-auto" style="width: 18rem;">
              <img src="assets/img/pablo-page-not-found.png" class="card-img-top" alt="Journal Repository">
              <div class="card-body">
                <h5 class="card-title">Eduroam</h5>
                <p class="card-text">Any local journal from all over Indonesia in your hand.</p>
                <a href="eduroam" class="btn btn-primary">Link</a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <!-- ################# Content 1 selesai ################# -->

<div data-aos="fade-up" data-aos-duration="1500" class="aos-init aos-animate">
    <div class="container">
      <h1 class="text-center pt-5 pb-5 font-weight-bold">Courses</h1>
      <div class="owl-carousel owl-theme owl-loaded owl-drag">
      <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1815px;">
        <div class="owl-item active" style="width: 202.5px; margin-right: 100px;">
           <div class="item">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/pablo-bitcoin-mining.png" class="card-img-top" alt="Network Connectivity">
            <div class="card-body">
              <h5 class="card-title">Network Connectivity</h5>
              <p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div></div><div class="owl-item active" style="width: 202.5px; margin-right: 100px;"><div class="item">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/pablo-delete-confirmation.png" class="card-img-top" alt="Video Conference">
            <div class="card-body">
              <h5 class="card-title">Video Conference</h5>
              <p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div></div><div class="owl-item active" style="width: 202.5px; margin-right: 100px;"><div class="item">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/pablo-sign-up.png" class="card-img-top" alt="Research Colaboration">
            <div class="card-body">
              <h5 class="card-title">Research Colaboration</h5>
              <p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div></div><div class="owl-item active" style="width: 202.5px; margin-right: 100px;"><div class="item">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/pablo-artifficial-intelligence.png" class="card-img-top" alt="Training and Certification">
            <div class="card-body">
              <h5 class="card-title">Training and Certification</h5>
              <p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div></div><div class="owl-item" style="width: 202.5px; margin-right: 100px;"><div class="item">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/pablo-page-not-found.png" class="card-img-top" alt="Journal Repository">
            <div class="card-body">
              <h5 class="card-title">Journal Repository</h5>
              <p class="card-text">Jaringan khusus tertutup nasional (National closed network).</p>
              <a href="#" class="btn btn-primary">Link</a>
            </div>
          </div>
        </div></div><div class="owl-item" style="width: 202.5px; margin-right: 100px;"><div class="item">
          &nbsp;
        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
    </div>
  </div>

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
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        dots: true,
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
      stagePadding: 0,
      loop: true,
      margin: 10,
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
  <script>
  $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
  </script>
@endsection