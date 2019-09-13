<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>idREN Register</title>

  <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/fav/favicon-16x16.png">
  <link rel="manifest" href="assets/icon/fav/site.webmanifest">
  <link rel="mask-icon" href="assets/icon/fav/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#f9f9f9">
  <meta name="theme-color" content="#ffffff">

  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/style/aos.css">

</head>

<body style="background-color: #F6F3FF">
  <div class="container-fluid pt-5 pr-0 pb-5 mt-5 mb-5">
    <div class="row mr-3 pb-4 mt-5 pt-2">
      <div class="col-md-5 ml-5 pr-0 mr-0 ">
        <h1 class="font-weight-bold" style="font-size: 54px">Terimakasih telah<br>
          mendaftar<br>
        </h1>
        <div class="text-wrap mt-3">
          Silahkan ke Dashboard
        </div>
        <div class="row">
          <div class="col-md-3 mr-0 pr-0">
            <div class=" mt-3 pt-3">
              @guest
                <a href="{{route('home')}}">
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

  <!-- SCRIPT -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
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
</body>

</html>