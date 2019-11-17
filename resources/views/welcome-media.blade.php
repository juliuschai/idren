@extends('layouts.app')

@section('title')
iDREN
@endsection

@section('content')
  <div class="container mt-4 pt-5">
    <div class="row">
      <div class="col-sm-5">
      <img src="assets/img/gurl.jpg" alt="" width="100%">
      </div>
      <div class="col">
        <h1 class="text-center pt-5 pb-5 font-weight-bold">Media</h2>
        <p class="text-center">
			Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network) Jaringan khusus tertutup nasional (National closed network)
		</p>
      </div>
    </div>
  </div>
  <br><br><br><br>
  <div class="container">
    <div class="container">
		<div data-aos="fade-up" data-aos-duration="1500">
          <h1 class="text-center pt-5 pb-5 font-weight-bold">Event</h1>
        </div>
        <p class="text-center">
            Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)

        </p>
		<br><br><br>
		<div data-aos="fade-up" data-aos-duration="1500">
          <h1 class="text-center pt-5 pb-5 font-weight-bold">News</h1>
        </div>
        <p class="text-center">
            Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)

        </p>
		<br><br><br>
		<div data-aos="fade-up" data-aos-duration="1500">
          <h1 class="text-center pt-5 pb-5 font-weight-bold">Download</h1>
        </div>
        <p class="text-center">
            Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)
			Jaringan khusus tertutup nasional (National closed network)

        </p>
    </div>
  </div>
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